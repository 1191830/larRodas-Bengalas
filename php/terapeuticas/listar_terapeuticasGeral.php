<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/getSession.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/terapeuticaDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/terapeutica.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/user.php';
    
    $PDO = new conexao;
    $DB = $PDO->conectar();
    $terapeuticaDB = new terapeuticaDB;
    $erro = '';

    if($user->getFuncao() == 2){
        $terapeuticas = $terapeuticaDB->verTerapeuticaEnfermeiro($user);
    }else if($user->getFuncao() == 1){
        $terapeuticas = $terapeuticaDB->verTerapeuticaLar($user);
    }else{
        $terapeuticas = $terapeuticaDB->verTerapeuticaGeral($user);
    }   

    if($erro != ''){
        $output = array(
            'erro' => $erro
        );
    }else{
        $output = array(
            'success' => true,
            'terapeuticas' => $terapeuticas,
            'funcao' => $user->getFuncao(),
            'lar' => $user->getLar()
        );
    }

    echo json_encode($output);
?>