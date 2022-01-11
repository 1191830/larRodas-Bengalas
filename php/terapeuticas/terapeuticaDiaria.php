<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/getSession.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/terapeuticaDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/terapeutica.php';

$PDO = new conexao;
$DB = $PDO->conectar();
$terapeuticaDB = new terapeuticaDB;
$erro = '';
//id da terapeutica selecionada
if(isset($_GET['terapeutica'])){
    try{
        $terapeutica = $_GET['terapeutica'];

        $terapeuticas = $terapeuticaDB->verTerapeuticaMedicamentoDia($terapeutica);

    }catch(Exception){
        $erro = "Ocorreu um erro";

    }
}else{
    $erro = "Nao tem terapeutica";
}

if($erro != ''){
    $output = array(
        'erro' => $erro
    );
}else{
    $output = array(
        'success' => true,
        'terapeuticas' => $terapeuticas
    );
}

echo json_encode($output);


?>