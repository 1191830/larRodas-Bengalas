import * as toma from "./toma_medicamento.js";
import * as helper from '/lar-dsos/script/helper/helper.js';

export function criarMedicamento() {
    guardarMedicamento();
    
    limparFormulario();

    toma.buscarTipoToma().then((result) => {
        preencherSelect(JSON.parse(result).tipoToma);
    });

    function guardarMedicamento(){
        $("#guardar").click(function (e) {
            e.preventDefault();
            this.erro = helper.validarCampoVazio(capturarCampos());
            if (Object.keys(this.erro).length) {
                console.log("aqui");
                var campos = "";
    
                $.each(this.erro, function (key, campo) {
                    campos += campo;
                    $(`#${campo}`).addClass("has-error");
                })
    
                $(".alert").addClass("alert-danger")
                    .css("display", "block")
                    .html(`Preencha todos os campos!</br> <strong>${campos}</strong>`)
            } else {
                $.ajax({
                    type: "POST",
                    url: "/lar-dsos/php/medicamentos/criar_medicamento.php",
                    data: {
                        id: $("#id").val(),
                        nome: $("#nome").val(),
                        dose: $("#dose").val(),
                        marca: $("#marca").val(),
                        principio: $("#principio").val(),
                        tipo_toma: $("#tipo_toma").val(),
                        toma: false
                    },
                    async: true,
                }).then(function (result) {
                    var resultado = JSON.parse(result);
                    if (resultado.success) {
                        $(".alert").removeClass("alert-danger");
                        $(".alert").addClass("alert-success").css("display", "block").html("Medicamento foi alterado com sucesso!");
                        setTimeout(function () {
                            window.location.replace("/lar-dsos/views/medicamentos/lista_medicamentos.php")
                        }, 1000);
                    }
                    if (resultado.erro) {
                        $(".alert").removeClass("alert-success");
    
                        $(".alert").addClass("alert-danger")
                            .css("display", "block")
                            .html(`Erro ao inserir na base de dados.`);
                    }
                });
            }
        });
    }
    

    function preencherSelect(tipoToma) {
        var option = "<option selected disabled>selecione o tipo de toma</option>";
        $.map(tipoToma, function (toma) {
            option += `<option value="${toma.tipo}">${toma.tipo}</option>`;
        });
        $('#tipo_toma').append(option);
    }


    function capturarCampos() {
        return {
            nome: $("#nome"),
            dose: $("#dose"),
            marca: $("#marca"),
            principio: $("#principio"),
            tipo_toma: $("#tipo_toma"),
        };
    }

    function limparFormulario(){
        $('#editar_cancelar')
        .html("Limpar Campos")
        .removeClass("btn-theme04")
        .addClass("btn-theme02")
        .click(function (e) {
            $('#medicamento')[0].reset();
            $('#medicamento input').removeClass("has-error").css("border-color","#ccc!important");
        });
    }

}




