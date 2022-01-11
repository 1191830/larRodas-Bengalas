<?php

use Medicamentos\medicamento;

require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/medicamento.php';

class medicamentoDB
{
    public static function find($id)
    {
        $query = conexao::conectar()->prepare("SELECT * from medicamento WHERE id_medicamento = ?");
        $query->execute(array($id));
        if ($query->rowCount() == -1) {
            $medicamento = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        } else {
            $medicamento = null;
        }

        return $medicamento;
    }

    public static function insertMedicamento($medicamento)
    {
        $query = conexao::conectar()->prepare("INSERT INTO medicamento(nome, dose, principio, marca, toma)
                                VALUES(?, ?, ?, ?, ?)");
        $query->execute(array($medicamento->getNome(), $medicamento->getDose(), $medicamento->getPrincipio(), $medicamento->getMarca(), (int)$medicamento->getToma()));
        if ($query->rowCount() != -1) {
            return false;
        } 
        
        return true;
        

    }

    public static function medicamentosInseridos($medicamentos)
    {
        $query = conexao::conectar()->prepare("SELECT TOP(:num) * FROM view_medicamentos ORDER BY id_medicamento DESC");
        $query->bindParam('num', $medicamentos, PDO::PARAM_INT);
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function getTodosMedicamentos()
    {
        $statement = conexao::conectar()->query("Select * from medicamento inner join tipoToma on medicamento.toma = tipoToma.id_tipoToma");
        if ($statement->rowCount() == -1) {
            $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $resultado = null;
        }

        return $resultado;
    }

    public static function getTodosMedicamentosAtivos(){
        $statement = conexao::conectar()->query("Select * from medicamento inner join tipoToma on medicamento.toma = tipoToma.id_tipoToma where medicamento.estado = 1");
        if ($statement->rowCount() == -1) {
            $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $resultado = null;
        }

        return $resultado;    
    }


    public static function getMedicamentoId(int $id)
    {

        $query = conexao::conectar()->prepare("Select * from medicamento inner join tipoToma on medicamento.toma = tipoToma.id_tipoToma where id_medicamento = :id");
        $query->bindParam('id', $id, PDO::PARAM_INT);
        $query->execute();
        if ($query->rowCount() == -1) {
            $medicamento = $query->fetch(PDO::FETCH_ASSOC);
        } else {
            $medicamento = null;
        }

        return $medicamento;
    }

    public static function updateMedicamento(medicamento $medicamento)
    {
        $query = conexao::conectar()->prepare("UPDATE medicamento SET nome=?, dose=?, principio=?, marca=?,toma=? 
                                            WHERE id_medicamento = ?");
        $query->execute([
            $medicamento->getNome(),
            $medicamento->getDose(),
            $medicamento->getPrincipio(),
            $medicamento->getMarca(),
            $medicamento->getToma(),
            $medicamento->getId()
        ]);
        if ($query->rowCount() != -1) {
           return false;
        } 
        return true;
    }

    public static function deletarMedicamento($id)
    {
        $query = conexao::conectar()->prepare("UPDATE medicamento SET estado=0 WHERE id_medicamento=?");
        $query->execute([$id]);
        if ($query->rowCount() != -1) {
           return false;
        } 
        return true;
    }
}
