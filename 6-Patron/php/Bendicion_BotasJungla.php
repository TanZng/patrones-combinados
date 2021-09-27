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


	public function verBotas(){
		echo 'Velocidad: ' . $this->velocidad . 'Habilidad: ' . $this->habilidad;
	}

	public function activarHabilidadFuria(){
		$this->habilidad = 'Juramento de la jungla divina';
		echo 'La habilidad: ' . $habilidad . ' ha sido activada.';
	}

}
?>