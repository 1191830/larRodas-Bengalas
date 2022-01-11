$(function(){
    $("button#btnEntrar").on("click", function(e){
        e.preventDefault();
        
        var campousername = $("form#formulariologin #username").val();
        var campopassword = $("form#formulariologin #password").val();

        if(campousername.trim() == "" || campopassword.trim() == ""){
            $("div#mensagem").html("Preencha todos os campos");
        }else{
        
            $.ajax({
                url: "php/acessos/auth.php",
                type: "POST",
                data: {
                    username: campousername,
                    password: campopassword
                },
                success: function(data){
                    data = JSON.parse(data);
                    if(data["erro"]){
                        $("div#mensagem").html(data["mensagem"]);
                    }else{
                        if(data.funcao == 0){
                            window.location = "views/lares/criar_lar.php";
                        }else if(data.funcao == 1){
                            window.location = "views/medicamentos/import_medicamentos/file_upload.php";
                        }else if(data.funcao == 2){
                            window.location = "views/terapeuticas/criar_terapeutica.php";
                        }else{
                            window.location = "teste.php";
                        }
                        
                    }
                },
                error: function(){
                    $("div#mensagem").html("Ocorreu um erro durante o login");
                }
            });
        }
    });
});