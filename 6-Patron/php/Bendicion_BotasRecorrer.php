<?php
include './Botas.php';
class Bendicion_BotasRecorrer extends Botas{
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

	public function activarHabilidadRetribucion(){
		$this->habilidad = 'Retribucion del angel caido';
	}

}
?>