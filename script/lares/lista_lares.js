$.ajax({
    type: "POST",
    url: "/lar-dsos/php/lares/get_Todos_Lares.php",
}).done(function (data) {
    var result = jQuery.parseJSON(data);
    $.map(result.lares, function (lar, valor) {

        var markup =
            `<tr class="linhaLar">
            <td class="idLar">${lar.id_lar}</td>
            <td>${lar.nome}</td>
            <td>${lar.morada}</td>
            <td>${lar.nif}</td>
            <td><a href="/lar-dsos/views/lares/criar_lar.php?id=${lar.id_lar}&editar=true" class="btn btn-primary btn-xs" >
            <i class="fa fa-pencil" id="btnEditar"></i></a>
            <button class="btn btn-danger btn-xs" id="btnEliminar"><i class="fa fa-trash-o "></i></button></td>
            </tr>`;
        $(".tabela-lares tbody").append(markup);
    });
});
