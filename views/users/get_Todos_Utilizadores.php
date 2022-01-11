<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/userDB.php';

$erro = "";
try {
    $users = userDB::getAllUsers();
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
        'users'        => $users
    );
}
echo json_encode($output);