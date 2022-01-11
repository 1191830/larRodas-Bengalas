<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/getSession.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/terapeuticaDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/terapeutica.php';

$PDO = new conexao;
$DB = $PDO->conectar();
$terapeuticaDB = new terapeuticaDB;
$erro = '';

if(isset($_POST['terapeutica']) && isset($_POST['hora'])){
    try{
        $terapeutica = $_POST['terapeutica'];
        $hora = $_POST['hora'];

        $temStock = $terapeuticaDB->inserirHistorico($terapeutica, $hora);

    }catch(Exception){
        $erro = "Ocorreu um erro";

    }
}else{
    $erro = "Nao tem terapeutica ou hora";
}

if($temStock == 1){
    $output = array(
        'success' => true,
        'erro' => $erro,
        'stock' => 1
    );
}else{
    $output = array(
        'erro' => $erro,
        'stock' => 0
    );

}

echo json_encode($output);


?>