<?php
include './Botas.php';
class Bendicion_BotasJungla extends Botas{
	private $habilidad;

	public function __construct($habilidad){
    	$this->habilidad = $habilidad;
	}

	public function getHabilidad(){
		return $this->habilidad;	
	}

	public function setHabilidad($habilidad){
		$this->habilidad = $habilidad;
	}


	public function gestionaBotas(){

	}

	public function activarHabilidadFuria(){
		$this->habilidad = 'Furia divina';
	}

}
?>