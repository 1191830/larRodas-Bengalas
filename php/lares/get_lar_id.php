<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/laresDB.php';

$erro = "";
try {
    $id = $_POST['id'];
    $lares = laresDB::selectLarID($id);
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