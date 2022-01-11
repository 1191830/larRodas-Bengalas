$(function () {
    $.urlParam = function (name) {
        var results = new RegExp('[?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results != null) {
            return results[1];
        }
        return false;
    }
    var id = $.urlParam('id');
    var editar = $.urlParam('editar');
    $.ajax({
        type: "POST",
        url: "/lar-dsos/php/lares/get_lar_id.php",
        data: {
            id: id
        },
    }).done(function (data) {
        var result = jQuery.parseJSON(data);
        $.map(result.lares, function (lar, valor) {
            $("#nome").val(lar.nome);
            $("#morada").val(lar.morada);
            $("#nif").val(lar.nif);
        });
    });
    if (editar) {
        $("#saveLar").click(function (e) {
            e.preventDefault();
            var nome = $('#nome').val();
            var morada = $('#morada').val();
            var nif = $('#nif').val();
            $.ajax({
                type: "POST",
                url: "/lar-dsos/php/lares/update_lar.php",
                async:true,
                data: {
                    id: id,
                    nome: nome,
                    morada: morada,
                    nif: nif
                },
            })
        })
    }
});