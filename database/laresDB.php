<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';
class laresDB
{
    public static function getAllLares()
    {
        $statement = conexao::conectar()->query("Select * from lar");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function insertLar($nome, $morada, $nif)
    {
        $sql = "INSERT INTO lar (nome, nif, morada) VALUES (?,?,?)";
        conexao::conectar()->prepare($sql)->execute([$nome, $nif, $morada]);
    }

    public static function updateLar($id,$nome,$morada,$nif)
    {
        $sql = "UPDATE lar SET nome = ?, morada = ?, nif = ? WHERE id_lar = ?;";
        conexao::conectar()->prepare($sql)->execute([$nome, $morada, $nif, $id]);
    }

    public static function selectLarID($id)
    {
        $statement = conexao::conectar()->query("Select * from lar where id_lar = $id");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function deleteLar($id){
        $sql = "DELETE FROM lar WHERE id_lar = $id";
        conexao::conectar()->prepare($sql)->execute([$id]);
    }
}
