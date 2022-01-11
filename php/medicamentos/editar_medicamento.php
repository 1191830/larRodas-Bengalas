<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/medicamentoDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/tipoTomaDB.php';
    
    $erro="";
    try {
        if($_GET['id']){
            $medicamento = medicamentoDB::getMedicamentoId((int)$_GET['id']);
            $tipoToma    = tipoTomaDB::getTodosTipoToma();
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
            'medicamentos' => $medicamento ? $medicamento : "",
            'tipoToma'     => $tipoToma ? $tipoToma : ""
        );
    }
    echo json_encode($output);