$(document).ready(function(){

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
                url: "../../php/terapeuticas/listar_terapeuticas.php",
                method: "GET",
                data: 'terapeutica= ' + id,
                dataType: "json",
            
                success: function(data){
                        
                    $.map(data.terapeuticas, function(terapeutica){
                        var markup = `<tr>
                        <td>${terapeutica.id_terapeutica}</td>
                        <td>${terapeutica.utente}</td>
                        <td>${terapeutica.medicamento}</td>
                        <td><span class="label label-info label-mini">${terapeutica.quantidade}</span></td>
                        <td>${terapeutica.horario}</td>
                        <td><span class="label label-info label-mini">${terapeutica.dataInicio}</span></td>`;
                        if(terapeutica.dataFim != null){
                            markup += `<th><span class="label label-info label-mini">${terapeutica.dataFim}</span></th>`;
                        }else{
                            markup += `<th><span class="label label-info label-mini">Continua</span></th>`;
                        }
                        if(terapeutica.sos == 1){
                            markup += `<th><span class="label label-info label-mini">Sim</span></th>`;
                        }else{
                            markup += `<th><span class="label label-info label-mini">Não</span></th>`;
                        }                        

                        if(data.funcao != 2 ){
                            markup += `<td>${terapeutica.nome}</td>`;
                            if(data.funcao == 0){
                                markup += `<td>${terapeutica.nomeLar}</td>`;
                            }
                        }else{
                            markup += `<td>
                            <a href="/lar-dsos/views/terapeuticas/criar_terapeutica.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                          </td>`;
                        }

                        markup += `</tr>`;
                        $("#lista").append(markup);
                        });
                    }
                }) 
});