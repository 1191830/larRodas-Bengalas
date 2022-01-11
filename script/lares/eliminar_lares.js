$(function () {
    $(document).on('click', '#btnEliminar', function (e) {

        e.preventDefault();

        var parent = $(this).closest('.linhaLar');
        var id = parent.find(".idLar").text();
        console.log(id);
        $.ajax({
            type: "POST",
            url: "/lar-dsos/php/lares/delete_lar_id.php",
            data: {
                id: id,
            },
        })

        $(this).closest("tr").remove();
    })
});