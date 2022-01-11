$(document).ready(function(){
    //variavel para verificar terapeuticas administradas atualmente
    var horaAdministrada = [];
    //vai buscar o id da terapeutica atual ao url
    $.urlParam = function (name) {
        var results = new RegExp('[?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results != null) {
            return results[1];
        }
        return false;
    }
    var id = $.urlParam('id');
    var editar = $.urlParam('editar');

    //chamada ajax para construir a tabela das terapeuticas
    $.ajax({
        //terapeuticas diarias nao administradas
        url: "../../../php/terapeuticas/terapeuticaDiaria.php",
        method: "GET",
        data: 'terapeutica= ' + id, 
        dataType: "json",
    
    }).then(function(data){
                
            $.map(data.terapeuticas, function(terapeutica){
                var markup = `<tr>
                <td>${terapeutica.id_terapeutica}</td>
                <td>${terapeutica.utente}</td>
                <td>${terapeutica.medicamento}</td>
                <td><span class="label label-info label-mini">${terapeutica.quantidade}</span></td>
                <td class="hora">${terapeutica.hora}:00</td>`;
                //butao para administrar
                markup += `<td>
                <button class="btn btn-primary btn-xs" id="administrar">
                <i class="fa fa-pencil"></i></a>`;
                markup += `</tr>`;
                $("#listaTerapeutica").append(markup);
                });
            })
    //ao clicar no botao para administrar recebemos a hora escolhida
    $(document).on('click', '#administrar', function() {
        let horaArray = $(this).closest('tr').find('.hora').text();
        let hora = horaArray.split(":", 1);
        hora = parseInt(hora[0])
        //chamada ajax para administrar terapeutica na hora indicada
        $.ajax({
            url: "../../../php/terapeuticas/administrarTerapeuticaMedicamento.php",
            method: "POST",
            data: ({
                terapeutica: id,
                hora: hora
             }), 
            dataType: "json",        
        }).then(function(data){
                //primeira verificacao é se a hora ja foi selecionada antes do reload da tabela
                if(jQuery.inArray(hora, horaAdministrada) != -1){
                    $('#message').html('<div class="alert alert-info">Já foi administrada</div>');
                }
                else{
                    //adicionamos a hora inserida ao array das horas administradas para este load
                    horaAdministrada.push(hora) ;
                    //1=ha stock 0=nao ha stock temos que ir verificar se existem outros users com stock
                    if(data.stock == 1){
                        $('#message').html('<div class="alert alert-success">Administrado com sucesso</div>');
                    }else if(data.stock == 0){
                        $('#message').html('<div class="alert alert-info">O cliente não tem stock</div>');
                        semStock(hora);
                    }
                }

    })
    })
    //funcao que vai verificar se existe stock noutro user e construir tabela para escolha
    function semStock(hora){
        $.ajax({
            url: "../../../php/terapeuticas/tabelaTrocas.php",
            method: "POST",
            data: ({
                terapeutica: id,
                hora: hora
             }), 
            dataType: "json",        
        }).then(function(data){
                var markup = `              <tr>
                <th>Terapeutica</th>
                <th>Utente</th>
                <th>Medicamento</th>
                <th>Administrar</th>
                <th></th>
                <td>
                <button class="btn btn-primary btn-xs" id="administrar">
                <i class="fa fa-pencil"></i></a>
              </tr>`;
              $("#listaStock").append(markup);
        })
    }      

});