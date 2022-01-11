$(function () {
    $.ajax({
        type: "POST",
        url: "/lar-dsos/views/users/get_Todos_Utilizadores.php",
    }).done(function (data) {
        var result = jQuery.parseJSON(data);
        $.map(result.users, function (user, valor) {
            var markup =
                `<tr>
            <td>${user.id_utilizador}</td>
            <td>${user.nome}</td>
            <td>${user.username}</td>
            <td>${user.nif}</td>
            <td>${user.nss}</td>
	        <td>${user.estado}</td>
            <td>${user.nomelar}</td>
            <td>${user.funcao}</td>
            <td><a href="/lar-dsos/views/users/criar_user.php?id=${user.id_utilizador}&editar=true" class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i></a>
            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></td>
            </tr>`;
            $(".tabela-users tbody").append(markup);
        });
    });
});