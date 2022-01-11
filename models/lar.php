<?php
Class lar{
    private $id_lar;
    private $nome_lar;
    private $morada_lar;
    private $nif_lar;

	public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
	
	public function __construct1($id_lar,$nome_lar,$morada_lar,$nif_lar)
    {
        $this->id_lar = $id_lar;
        $this->nome_lar = $nome_lar;
        $this->morada_lar = $morada_lar;
        $this->nif_lar = $nif_lar;
    }

	public function getId_lar(){
		return $this->id_lar;
	}

	public function setId_lar($id_lar){
		$this->id_lar = $id_lar;
	}

	public function getNome_lar(){
		return $this->nome_lar;
	}

	public function setNome_lar($nome_lar){
		$this->nome_lar = $nome_lar;
	}

	public function getMorada_lar(){
		return $this->morada_lar;
	}

	public function setMorada_lar($morada_lar){
		$this->morada_lar = $morada_lar;
	}

	public function getNif_lar(){
		return $this->nif_lar;
	}

	public function setNif_lar($nif_lar){
		$this->nif_lar = $nif_lar;
	}
}
