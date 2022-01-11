<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';
class tipoFuncaoDB
{
    public static function getAllTipoFuncao()
    {
        global $PDO;
        $PDO = new conexao;
        $DB = $PDO->conectar();

        $statement = $DB->query("Select * from tipofuncao");

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
   
}