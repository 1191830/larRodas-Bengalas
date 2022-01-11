<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/models/user.php';;

session_start();

$output = array(

    'id' => $_SESSION["user"][0],
    'nome' => $_SESSION["user"][1],
    'userName' => $_SESSION["user"][2],
    'nif' => $_SESSION["user"][3],
    'lar' => $_SESSION["user"][4],
    'funcao' => $_SESSION["user"][5],
    'estado' => $_SESSION["user"][6],
);  
echo json_encode($output);