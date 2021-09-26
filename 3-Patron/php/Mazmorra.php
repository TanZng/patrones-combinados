<?php
class Mazmorra{
	private $salas = [];

	public function __construct($salas){
    $this->salas = $salas;
	}
	public function __construct(){}
	
	public function getSalas(){
		return $this->salas;	
	}

	public function setSalas($salas){
		$this->salas = $salas;
	}

	public function addSala($sala){
		$this->salas = $salas;
		array_push($this->salas,$sala);
	}
}
?>
