<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/userDB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/models/user.php';
session_start();

$adminGeral = 0;
$adminLar = 1;
$enfermeiro = 2;
$user = new user;

if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
    $user->setId($_SESSION["user"]['id']);
    $user->setNome($_SESSION["user"]['nome']);
    $user->setUsername($_SESSION["user"]['username']);
    $user->setPassword($_SESSION["user"]['password'] ?? "");
    $user->setNif($_SESSION["user"]['nif']);
    $user->setLar($_SESSION["user"]['lar']);
    $user->setFuncao($_SESSION["user"]['tipoFuncao']);
    $user->setEstado($_SESSION["user"]['estado']);
    $userDB = new userDB;
} else {
    header("Location:" . $_SERVER['DOCUMENT_ROOT'] . "/lar-dsos/home.php");
   // exit();
    //echo ("<script>location.href = /home.php</script>");  object(user)#1 (9) { ["id":"user":private]=> string(19) "Administrador Geral" ["nome":"user":private]=> string(10) "adminGeral" ["username":"user":private]=> string(3) "123" ["password":"user":private]=> NULL ["nif":"user":private]=> NULL ["nss":"user":private]=> NULL ["lar":"user":private]=> NULL ["funcao":"user":private]=> string(1) "0" ["estado":"user":private]=> string(1) "1" }

    // array(6) { [0]=> string(19) "Administrador Geral" [1]=> string(10) "adminGeral" [2]=> string(3) "123" [3]=> NULL [4]=> string(1) "0" [5]=> string(1) "1" }
}
