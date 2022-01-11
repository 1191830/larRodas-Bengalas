$(document).ready(function(){
    
    $.ajax({
        url: "../../php/terapeuticas/listar_terapeuticasGeral.php",
        method: "GET",
        dataType: "json",
    
        success: function(data){
            $count = 0;
            data.terapeuticas.forEach (function(terapeutica){
                
                
                var markup = `<tr>
                <td>${terapeutica.id_terapeutica}</td>
                <td>${terapeutica.utente}</td>`;               

                if(data.funcao != 2 ){
                    markup += `<td>${terapeutica.nome}</td>`;
                    if(data.funcao == 0){
                        markup += `<td>${terapeutica.nomeLar}</td>`;
                    }
                }else{
                    markup += `<td>
                    <td><a href="/lar-dsos/views/terapeuticas/criar_terapeutica.php?id=${terapeutica.id_terapeutica}&editar=true" class="btn btn-primary btn-xs" >
                    <i class="fa fa-pencil"></i></a>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                  </td>`;
                }

                markup += `</tr>`;
                $("#listaGeral").append(markup);
                $count ++;
                });
            }
        }) 
});