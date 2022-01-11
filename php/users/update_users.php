<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/userDB.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/tipoTomaDB.php';
    
    $erro="";
    try {
        if($_POST['arr']){
         $user = new user;
         
         if(!empty($_POST['arr']['nome'])){
            $user->setNome($_POST['arr']['nome']);
         } 
         if(!empty($_POST['arr']['username'])){
            $user->setUserName($_POST['arr']['username']);
         } 
         if(!empty($_POST['arr']['password'])){
            $user->setPassword($_POST['arr']['password']);
         } 
         if(!empty($_POST['arr']['nif'])){
            $user->setNif($_POST['arr']['nif']);
         } 
		 
		 if(!empty($_POST['arr']['nss'])){
            $user->setNSS($_POST['arr']['nss']);
         }

		 if(!empty($_POST['arr']['lar'])){
            $user->setLar($_POST['arr']['lar']);
         }

		if(!empty($_POST['arr']['funcao'])){
            $user->setFuncao($_POST['arr']['funcao']);
         } 
		 
		 if(!empty($_POST['arr']['estado'])){
            $user->setEstado($_POST['arr']['estado']);
         } 
         
          userDB::updateUser($user);
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
            'users' => $user ? $user : "",
          //  'tipoToma'     => $tipoToma ? $tipoToma : ""
        );
    }
    echo json_encode($output);