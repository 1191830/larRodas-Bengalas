<?php

use Medicamentos\medicamento;

require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/medicamentoDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/tipoTomaDB.php';


$erro = "";
try {
    $medicamento = new medicamento;
    if (!empty($_POST['id']) && !empty($_POST['dose']) && !empty($_POST['marca']) &&
        !empty($_POST['tipo_toma']) && !empty($_POST['principio']) && !empty($_POST['nome'])) 
        {
            $medicamento->setId(intval($_POST['id']));
            $medicamento->setNome($_POST['nome']);
            $medicamento->setDose($_POST['dose']);
            $medicamento->setMarca($_POST['marca']);
            $medicamento->setPrincipio($_POST['principio']); 
            $id_toma = tipoTomaDB::getTomaPorNome($_POST['tipo_toma']);
            $medicamento->setToma(intval($id_toma['id_tipoToma']));
        }

    medicamentoDB::updateMedicamento($medicamento);

} catch (Exception $e) {
    $erro = $e->getMessage();
}
if ($erro != '') {
    $output = array(
        'erro' => $erro
    );
} else {
    $output = array(
        'success' => true,
    );
}
echo json_encode($output);
