<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/terapeutica.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/user.php';
Class terapeuticaDB{
    
    private $PDO;


    public function verMedicamentosTerapeuticaEnfermeiro($user, $terapeutica){
        //desativa todas as terapeuticas que ja tenham chegado a data de fim
        $query = conexao::conectar()->prepare("EXEC proc_terapeuticaCursor");
        $query->execute();

        $query = conexao::conectar()->prepare("SELECT * FROM view_terapeuticaMedicamento 
        WHERE id_terapeutica = ? and idEnfermeiro = ? and estado = 1 and administrada = 0 and ativa = 1");
        $query->execute(array($terapeutica, $user->getId()));
    }
    public function verMedicamentosTerapeuticaLar($user, $terapeutica){

        $query = conexao::conectar()->prepare("EXEC proc_terapeuticaCursor");
        $query->execute();

        $query = conexao::conectar()->prepare("SELECT * FROM view_terapeuticaMedicamento 
        WHERE id_terapeutica = ? and estado = 1 and administrada = 0 and ativa = 1");
        $query->execute(array($terapeutica));

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function verMedicamentosTerapeuticaUser($user, $terapeutica){

        $query = conexao::conectar()->prepare("EXEC proc_terapeuticaCursor");
        $query->execute();

        $query = conexao::conectar()->prepare("SELECT * FROM view_terapeuticaMedicamento 
        WHERE id_terapeutica = ? and estado = 1 and administrada = 0 and ativa = 1");
        $query->execute(array($terapeutica));

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //retorna todas os medicamentos nao administrados ativas do lar e do user
    public function verTerapeuticaMedicamentoGeral($user){
      
        $query = conexao::conectar()->prepare("EXEC proc_terapeuticaCursor");
        $query->execute();

        $query = conexao::conectar()->prepare("SELECT * FROM view_terapeuticaMedicamento 
        WHERE idEnfermeiro = ? and estado = 1 and administrada = 0 and ativa = 1");
        $query->execute(array($user->getId()));

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //retorna todas as terapeuticas ativas do lar e do user
    public function verTerapeuticaEnfermeiro($user){

        $query = conexao::conectar()->prepare("SELECT * FROM view_terapeutica 
        WHERE idEnfermeiro = ? and estado = 1");
        $query->execute(array($user->getId()));

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //retorna todas as terapeuticas ativas do lar
    public function verTerapeuticaLar($user){

        $query = conexao::conectar()->prepare("SELECT * FROM view_terapeutica
        WHERE lar = ? and estado = 1");
        $query->execute(array($user->getLar(), $user->getId()));

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    //retorna todas as terapeuticas ativas
    public function verTerapeuticaGeral($user){

        $query = conexao::conectar()->prepare("SELECT * FROM view_terapeutica
        WHERE estado = 1");

        $query->execute(array($user->getLar(), $user->getId()));

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    public function verTerapeuticaMedicamentoDia($terapeutica){
        //cria os horarios de toma diaria da terapeutica caso nao existam e insere na tabela historico como nao administrada
        $query = conexao::conectar()->prepare("EXEC proc_historicoDia ?");
        $query->execute(array($terapeutica));
        //retorna todas os horarios nao administrados do dia
        $query = conexao::conectar()->prepare("EXEC proc_verTerapeuticaMedicamentoDia ?");

        $query->execute(array($terapeutica));

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }
    //Verifica se tem stock e envia o resultado, se tiver stock faz update do stock do cliente e inser no historico como administrada
    public function inserirHistorico($terapeutica, $hora){

        //verifica que tem stock
        $query = conexao::conectar()->prepare("SELECT db_owner.func_temStock(?, ?) as 'stock'");
        $query->execute(array($terapeutica, $hora));
        $temStock = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        $temStock = (int)$temStock["stock"];

        //se tiver faz update ao stock e insere no historico
        if($temStock == 1){
            $query = conexao::conectar()->prepare("EXEC proc_updateStock ?");

            $query->execute(array($terapeutica, $hora));

            $query = conexao::conectar()->prepare("EXEC proc_insereHistorico ?, ?");

            $query->execute(array($terapeutica, $hora));
    
            return $temStock;
        }

        return $temStock;

    }
}
?>