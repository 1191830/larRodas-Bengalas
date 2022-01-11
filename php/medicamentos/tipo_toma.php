<?php

use Medicamentos\medicamento;

require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/tipoTomaDB.php';

$erro = "";
try {
    $tipoToma = tipoTomaDB::getTodosTipoToma();
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
        'tipoToma'     => isset($tipoToma) ? $tipoToma : ""
    );
}
echo json_encode($output);
