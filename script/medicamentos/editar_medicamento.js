import * as toma from "./toma_medicamento.js";
import * as helper from '/lar-dsos/script/helper/helper.js';


export function editarMedicamento(id) {
    preencherFormulario();
    btnCancelar();
    guardarMedicamento();
    
    function preencherFormulario(){
        $.ajax({
            type: "GET",
            url: "/lar-dsos/php/medicamentos/editar_medicamento.php",
            data: {
                id: id
            },
            async: true,
        }).then(function (result) {
            var resultado = JSON.parse(result);
            preencherCampos(resultado.medicamentos);
            toma.buscarTipoToma().then((result) => {
                preencherSelect(JSON.parse(result).tipoToma, resultado.medicamentos.toma);
            });
        });
    }
   
    function btnCancelar(){
        $("#editar_cancelar").click(function (e) {
            e.preventDefault();
            $("#container").load("/lar-dsos/views/medicamentos/lista_medicamentos.php #main-content");
            window.history.replaceState({}, "", "/lar-dsos/views/medicamentos/lista_medicamentos.php");
            location.reload();
        })
    }
   
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
                    url: "/lar-dsos/php/medicamentos/update_medicamento.php",
                    data: {
                        id: $("#id").val(),
                        nome: $("#nome").val(),
                        dose: $("#dose").val(),
                        marca: $("#marca").val(),
                        principio: $("#principio").val(),
                        tipo_toma: $("#tipo_toma").val(),
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

    function capturarCampos() {
        return {
            nome: $("#nome"),
            dose: $("#dose"),
            marca: $("#marca"),
            principio: $("#principio"),
            tipo_toma: $("#tipo_toma"),
        };
    }

    function preencherCampos(medicamento) {
        $('#id').val(medicamento.id_medicamento);
        $('#nome').val(medicamento.nome);
        $('#principio').val(medicamento.principio);
        $('#dose').val(medicamento.dose);
        $('#marca').val(medicamento.marca);
    }

    function preencherSelect(tipoToma, tomaMedicamento) {
        $.map(tipoToma, function (toma) {
            var option = (tomaMedicamento == toma.id_tipoToma) ? "<option selected " : "<option "
            option += `value="${toma.tipo}">${toma.tipo}</option>`;
            $('#tipo_toma').append(option);
        });
    }
}












