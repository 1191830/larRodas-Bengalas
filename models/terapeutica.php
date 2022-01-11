<?php
Class terapeutica{
    private $id;
    private $utente;
    private $medicamento;
    private $quantidade;
    private $horario;
    private $tecnico;
    private $lar;

    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
   
    public function __construct1($id, $utente, $medicamento, $quantidade, $horario, $tecnico, $lar)
    {
        $this->id = $id;
        $this->utente = $utente;
        $this->medicamento = $medicamento;
        $this->quantidade = $quantidade;
        $this->horario = $horario;
        $this->tecnico = $tecnico;
        $this->lar = $lar;
    }

    public function getId(){
        return $this->id;
    }

    public function getUtente(){
        return $this->utente;
    }

    public function getMedicamento(){
        return $this->medicamento;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getHorario(){
        return $this->horario;
    }

    public function getTecnico(){
        return $this->tecnico;
    }

    public function getLar(){
        return $this->lar;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setUtente($utente){
        $this->utente = $utente;
    }

    public function setMedicamento($medicamento){
        $this->medicamento = $medicamento;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function setHorario($horario){
        $this->horario = $horario;
    }

    public function setTecnico($tecnico){
        $this->tecnico = $tecnico;
    }

    public function setLar($lar){
        $this->lar = $lar;
    }
}
?>