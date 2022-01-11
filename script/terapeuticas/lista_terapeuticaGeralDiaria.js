$(document).ready(function(){
    
            $.ajax({
                url: "../../php/terapeuticas/lista_terapeuticasGeralDiaria.php",
                method: "GET",
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

                        markup += `<td><a href="/lar-dsos/views/terapeuticas/administrar_terapeuticas/administrar_terapeutica.php?id=${terapeutica.id_terapeuticaMedicamento}&editar=true" 
                        class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i></a>`;
                        markup += `</tr>`;
                        $("#listaGeral").append(markup);
                        });
                    }
                }) 
});