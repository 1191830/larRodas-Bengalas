<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/laresDB.php';

$erro = "";
try {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $morada = $_POST['morada'];
    $nif = $_POST['nif'];
    laresDB::updateLar($id, $nome, $morada, $nif);
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
    );
}
echo json_encode($output);