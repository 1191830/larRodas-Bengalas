export function deletarMedicamento(){
    
    apagarLinha();

    function apagarLinha(){
        $(document).on('click', '.apagar', function() {
            var tr = $(this).closest("tr").remove(); 
            
            deletar($(this).val(),tr.find('td:eq(2)').text());
        });
    }
    
    
    function deletar(id,nome){
        $.ajax({
            type: "POST",
            url: "/lar-dsos/php/medicamentos/deletar_medicamento.php",
            data: {
                id: id
            },
            async: true,
        }).then(function (result) {
            var resultado = JSON.parse(result);
            if (resultado.success) {
                $(".alert").removeClass("alert-danger");
                $(".alert").addClass("alert-success").css("display", "block").html(`Medicamento <b>${nome}</b> foi apagdo com sucesso!`);
            }
            if (resultado.erro) {
                $(".alert").removeClass("alert-success");

                $(".alert").addClass("alert-danger")
                    .css("display", "block")
                    .html(`Erro ao apagar o medicamento <b>${nome}</b>.`);
            }
        });
    }
}