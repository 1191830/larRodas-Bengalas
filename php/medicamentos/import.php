<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/medicamentoDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/medicamento.php';

session_start();

if(isset($_SESSION['csv_file_name'])){

    $erro = '';
    $count = 0;
    try{
        $file_data = fopen('file/' . $_SESSION['csv_file_name'], 'r');
        $row = file('file/' . $_SESSION['csv_file_name']);

        foreach ($row as $line){
/*             $column = explode(';', $line);
            $medicamento = new medicamento;

            $medicamento->setNome($column[0]);
            $medicamento->setDose($column[1]);
            $medicamento->setPrincipio($column[2]);
            $medicamento->setMarca($column[3]);
            $medicamento->setToma($column[4]);

            $medicamentoDB->insertMedicamento($medicamento); */
            $count =$count + 1;
        }

        $medicamentos = medicamentoDB::medicamentosInseridos($count);

    }catch(Exception $e){
        $erro = $e->getMessage();
    }
    if($erro != ''){
        $output = array(
            'erro' => $erro
        );
    }else{
        $output = array(
            'success' => true,
            'medicamentos' => $medicamentos
        );
    }

    echo json_encode($output);

    unset($_SESSION['csv_file_name']);
}
?>