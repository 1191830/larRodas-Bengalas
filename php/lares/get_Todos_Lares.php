<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/laresDB.php';

$erro = "";
try {
    $lares = laresDB::getAllLares();
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
        'lares'        => $lares
    );
}
echo json_encode($output);