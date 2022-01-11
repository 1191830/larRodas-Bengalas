$(function () {
    $.urlParam = function (name) {
        var results = new RegExp('[?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results != null) {
            return results[1];
        }
        return false;
    }
    var editar = $.urlParam('editar');
    if (!editar) {
        $('#saveLar').click(function (e) {
            e.preventDefault();
            var nome = $('#nome').val();
            var morada = $('#morada').val();
            var nif = $('#nif').val();
            if (nome != "" && morada != "" && nif != "") {
                $.ajax({
                    type: "POST",
                    url: "/lar-dsos/php/lares/insert_lares.php",
                    data: {
                        nome: nome,
                        morada: morada,
                        nif: nif
                    },
                }).then(function(){
                    $('#nome').val("");
                    $('#morada').val("");
                    $('#nif').val("");
                })
                alert('Lar inserido');
            } else {
                alert('Preencha os campos');
            }
        })
    }
});


