<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/getSession.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/terapeuticaDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/terapeutica.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/user.php';
    
    $PDO = new conexao;
    $DB = $PDO->conectar();
    $terapeuticaDB = new terapeuticaDB;
    $erro = '';


    $terapeuticas = $terapeuticaDB->verTerapeuticaMedicamentoGeral($user);


    foreach($terapeuticas as $key => $terapeutica){
        $hora = 0;
        $count = 1;
        $horario = "0:00";
        while($hora < 24){
            $hora += $terapeutica["horario"];
            if($hora < 23){              
                $horario = $horario . " / " . $hora . ":00";
            }
            $count ++;
            if($count == 6){
                $horario .= "<br>";
                $count = 0;
            }           
        }
        $terapeuticas[$key]['horario'] = $horario;
    }

if($erro != ''){
    $output = array(
        'erro' => $erro
    );
}else{
    $output = array(
        'success' => true,
        'terapeuticas' => $terapeuticas,
        'funcao' => $user->getFuncao(),
        'lar' => $user->getLar()
    );
}

echo json_encode($output);
?>