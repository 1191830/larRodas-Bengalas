<?php
namespace Medicamentos;
Class medicamento{
    private $id;
    private $nome;
    private $dose;
    private $principio;
    private $marca;
    private $toma;

    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
   
    public function __construct1($id, $nome, $dose, $principio, $marca, $toma)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->dose = $dose;
        $this->principio = $principio;
        $this->marca = $marca;
        $this->toma = $toma;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDose(){
        return $this->dose;
    }

    public function getPrincipio(){
        return $this->principio;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getToma(){
        return $this->toma;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setDose($dose){
        $this->dose = $dose;
    }

    public function setPrincipio($principio){
        $this->principio = $principio;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setToma($toma){
        $this->toma = $toma;
    }
}
?>