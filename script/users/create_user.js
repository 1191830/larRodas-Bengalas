$(document).ready(function () {
    $('#saveLar').on('click', function () {
        console.log("clicado");
        var nome = $('#nome').val();
        var morada = $('#morada').val();
        var nif = $('#nif').val();
        console.log(nome, morada, nif);
        if (nome != "" && morada != "" && nif != "") {
            $.ajax({
                type: "POST",
                url: "/lar-dsos/views/lares/insert_lares.php",
                data: {
                    nome: nome,
                    morada: morada,
                    nif: nif
                },
            })
            alert('Lar inserido');
        } else {
            alert('Preencha os campos');
        }
    });
});