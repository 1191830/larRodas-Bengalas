<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';

class tipoTomaDB
{
    public static function getTodosTipoToma()
    {
        // $query = $DB->prepare("Select * from medicamento")->execute();
        $statement = conexao::conectar()->query("Select * from tipoToma");

        // get all publishers
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getTomaPorNome($tipoToma)
    {
        $query = conexao::conectar()->prepare("Select * from tipoToma where tipo = ?");
        $query->execute([$tipoToma]);
        if ($query->rowCount() != -1) {
           return false;
        } 
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}
