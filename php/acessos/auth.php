<?php
require $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/database/userDB.php';

$userDB = new userDB;

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $client = $userDB->find($_POST['username'], $_POST['password']);

    if ($client != null) {
        session_start();

        $lar = $userDB->verLarUtilizador($client);

        $_SESSION["user"] = [
            'id'         => $client["id_utilizador"],
            'nome'       => $client["nome"],
            'username'   => $client["username"],
            'password'   => $client["pass"],
            'nif'        => $client["nif"],
            'lar'        => $lar["lar"],
            'tipoFuncao' => $lar["tipoFuncao"],
            'estado'     => $lar["estado"]
        ];

        echo json_encode(array("erro" => 0, "funcao" => $lar["tipoFuncao"]));
    } else {
        echo json_encode(array("erro" => 1, "mensagem" => "Utilizador nao encontrado"));
    }
} else {
    echo json_encode(array("erro" => 1, "mensagem" => "Preencha dados"));
}
