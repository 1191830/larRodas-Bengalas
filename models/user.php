<?php
Class user{
    private $id;
    private $nome;
    private $username;
    private $password;
    private $nif;
    private $nss;
    private $lar;
    private $funcao;
    private $estado;

    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
   
    public function __construct1($id, $nome, $username, $password, $nif, $nss, $lar, $funcao, $estado)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->username = $username;
        $this->password = $password;
        $this->nif = $nif;
        $this->lar = $lar;
        $this->funcao = $funcao;
        $this->estado = $estado;
    }
   
    public function __construct2($id, $nome, $username, $funcao, $estado)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->username = $username;
        $this->funcao = $funcao;
        $this->estado = $estado;
    }

    public function __construct3($id, $nome, $nif, $nss, $estado)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->nif = $nif;
        $this->nss = $nss;
        $this->estado = $estado;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getUserName(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getNif(){
        return $this->nif;
    }

    public function getNSS(){
        return $this->nss;
    }

    public function getLar(){
        return $this->lar;
    }

    public function getFuncao(){
        return $this->funcao;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setUserName($username){
        $this->username = $username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setNif($nif){
        $this->nif = $nif;
    }

    public function setNSS($nss){
        $this->nss = $nss;
    }

    public function setLar($lar){
        $this->lar = $lar;
    }

    public function setFuncao($funcao){
        $this->funcao = $funcao;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }
}
?>