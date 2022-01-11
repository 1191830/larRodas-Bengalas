<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/medicamentoDB.php';

$erro = "";
try {
    if ($_POST['id']) {
        medicamentoDB::deletarMedicamento($_POST["id"]);
    }else{
        $erro = "erro ao deletar o medicamento";
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
    );
}
echo json_encode($output);
