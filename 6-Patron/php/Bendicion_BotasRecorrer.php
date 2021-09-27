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


	public function verBotas(){
		echo 'Velocidad: ' . $this->velocidad . 'Habilidad: ' . $this->habilidad;

	}

	public function activarHabilidadRetribucion(){
		$this->habilidad = 'Retribucion del angel caido';
		echo 'La habilidad: ' . $habilidad . ' ha sido activada.';
	}

}
?>