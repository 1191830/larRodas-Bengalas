<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/userDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/tipofuncaoDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/LaresDB.php';
    
    $erro="";
    try {
        if($_GET['id']){
            $user = userDB::getUserbyId((int)$_GET['id']);
            $tipoFuncao  = tipoFuncaoDB::getAllTipoFuncao();
            $lar = laresDB::getAllLares();
        
        }
    } catch (Exception $e) {
        $erro = $e->getMessage();
    }
    if ($erro != '') {
        $output = array(
            'erro' => $erro
        );
    } else {
        $output = array(
            'success'      => true,
            'users' => $user ? $user : "",
            'tipoFuncao'  => $tipoFuncao ? $tipoFuncao : "",
            'lar' => $lar ? $lar : "" 
        );
    }
    echo json_encode($output);