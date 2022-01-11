<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/database/conexao.php';
Class userDB{
    
    private $PDO;

    public function find($username, $pass){
        
        
        $query = conexao::conectar()->prepare("SELECT * from utilizador WHERE username = ? and pass = ?");
        $query->execute(array($username, $pass));
        if($query->rowCount() == -1){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        }else{
            $user = null;
        }
        
        return $user;
        }

    public function verLarUtilizador($user){
        

        $query = conexao::conectar()->prepare("SELECT * FROM utilizadorLar WHERE utilizador = ?");
        $query->execute(array($user["id_utilizador"]));
        $userLar = $query->fetch(PDO::FETCH_ASSOC);
        return $userLar;
        }
        
    public function verUtilizadoresLar($lar){
        

        $query = conexao::conectar()->prepare("SELECT * FROM utilizador");
        $query->execute();

        $users = $query->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }


    public static function getAllUsers()
    {
        

        $statement = conexao::conectar()->query("SELECT id_utilizador, Utilizador.nome, username, utilizador.nif as nif, nss, lar.nome as nomelar, tipoFuncao.funcao, utilizadorLar.estado  FROM UTILIZADOR
        INNER JOIN UTILIZADORLAR ON utilizador.id_utilizador = utilizadorLar.utilizador 
        INNER JOIN  LAR ON utilizadorLar.lar = LAR.iD_LAR
        INNER JOIN  tipoFuncao on  utilizadorLar.tipoFuncao = tipofuncao.id_TipoFuncao");


        return $statement->fetchAll(PDO::FETCH_ASSOC);


    }

    public static function getUserbyId(int $id)
    {
        

        $query = conexao::conectar()->prepare("SELECT id_utilizador, Utilizador.nome, username, utilizador.nif as nif, nss, lar.nome as nomelar, tipoFuncao.funcao, utilizadorLar.estado  FROM UTILIZADOR
        INNER JOIN UTILIZADORLAR ON utilizador.id_utilizador = utilizadorLar.utilizador 
        INNER JOIN  LAR ON utilizadorLar.lar = LAR.iD_LAR
        INNER JOIN  tipoFuncao on  utilizadorLar.tipoFuncao = tipofuncao.id_TipoFuncao where id_utilizador = :id");
        $query->bindParam('id', $id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public static function insertUser($nome, $morada, $nif)
    {
        

        $sql = "INSERT INTO lar (nome, nif, morada) VALUES (?,?,?)";
        conexao::conectar()->prepare($sql)->execute([$nome, $nif, $morada]);
    }

    public static function updateUser(user $user){
        

        // $sql = "UPDATE medicamento SET nome=?, surname=?, sex=? WHERE id=?";
        // $DB->prepare($sql)->execute(
        //     [
        //         $medicamento->getNome(), 
                
        //     ]);

        // return $query->fetch(PDO::FETCH_ASSOC);

    }

    






}


?>