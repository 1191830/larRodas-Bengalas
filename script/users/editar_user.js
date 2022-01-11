$(function () {
    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results != null) {
            return results[1];
        }
        return false;
    }
    var id = $.urlParam("id");
    var editar = $.urlParam("editar");
    var users = {};
    var tipoFuncao = {};
    var lar = {};
    var tipoDefault = "";
    if (!editar) {
        $('#editar_cancelar').remove();
    }
    $.ajax({
        type: "GET",
        url: "/lar-dsos/php/users/editar_user.php",
        data: {
            id: id
        }
    }).then(function (result) {
        var resultado = JSON.parse(result);
        console.log(resultado);
        users = resultado.users;
        tipoDefault = resultado.users.lar
        tipoToma = resultado.Funcao;
        lar = resultado.lar;
    })

    $(document).ajaxComplete(function () {
        $('#nome').val(users.nome);
        $('#username').val(users.username);
        //$('password').val(users.password);
        $('#nif').val(users.nif);
        $('#nss').val(users.nss);

    });
/*
    $(document).ajaxComplete(function () {
        $.map(tipoToma, function (toma) {
            var option = (tipoDefault == toma.id_tipoToma) ? "<option selected " : "<option "
            option += `value="${toma.id_tipoToma}">${toma.tipo}</option>`;
            $('#tipo_toma').append(option);
        });
    });

    */
    if (editar) {

        $("#editar_cancelar").click(function (e) {
            e.preventDefault();
            $("#container").load("/lar-dsos/views/medicamentos/lista_medicamentos.php #main-content");
            window.history.replaceState({}, "", "/lar-dsos/views/medicamentos/lista_medicamentos.php");
            location.reload();

        })
    //a ver
        $("#guardar").click(function (e) {
            e.preventDefault();
            var arr = [];
            arr['id']        = 'vermelho';
            arr['nome']      = 'Ferrari';
            arr['principio'] = '700';
            arr['dose']      = false;
            arr['marca']     = 21;
            arr['toma']      = 21;
            $.ajax({
                type: "POST",
                url: "/lar-dsos/php/medicamentos/update_medicamentos.php",
                data: {
                    arr: arr,
                }
            }).then(function (result) {

            })
        })
    }
});
