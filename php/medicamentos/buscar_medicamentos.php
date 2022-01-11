<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/medicamentoDB.php';

$erro = "";
try {
    if (isset($_GET["todos"]) && $_GET["todos"]) {
        $medicamentos = medicamentoDB::getTodosMedicamentos();
    }
    if (isset($_GET["ativo"]) && $_GET["ativo"]) {
        
        $medicamentos = medicamentoDB::getTodosMedicamentosAtivos();
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
        'medicamentos' => $medicamentos
    );
}
echo json_encode($output);
