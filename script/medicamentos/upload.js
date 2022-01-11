$(document).ready(function(){

    $('#upload').change(function(event){
        $('#message').html('');
        var name = event.target.files[0].name;
        $("#fileName").text(name);
    });

    $('#upload').on('submit', function(event){
        $('#message').html('');
        event.preventDefault();
        $.ajax({
            url: "../../../php/medicamentos/upload.php",
            method: "POST",
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,

            success: function(data){
                if(data.success){
                    $('#total_data').text(data.total_line);

                    start_import();

                }
                if(data.erro){
                    $('#message').html('<div class="alert alert-danger">' + data.erro + '</div>');
                }
            }
        })
    });

    function start_import(){
        console.log(1);
        $.ajax({
            url: "../../../php/medicamentos/import.php",
            dataType: "json",
            success: function(data){
                $('#message').html('<div class="alert alert-success">Ficheiro importado com sucesso</div>');
                var  markup = `<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th><th>Dose</th><th>Principio</th><th>Marca</th><th>Toma</th>
                    </tr>
                </thead>`;
                $.map(data.medicamentos, function(medicamento){
                    console.log(medicamento.nome);
                  markup += `<tr>
                  <td>${medicamento.nome}</td>
                  <td>${medicamento.dose}</td>
                  <td>${medicamento.principio}</td>
                  <td>${medicamento.marca}</td>
                  <td>${medicamento.tipo}</td>
                  </tr>`;
                  console.log(medicamento);
                });
                markup += `</table>`;
                $("#resultados").append(markup);
          }
        })
    }
});