<?php
include './Botas.php';
class Bota extends Botas{
	private $velocidad;

	public function __construct($velocidad){
    	$this->velocidad = $velocidad;
	}

	public function getVelocidad(){
		return $this->velocidad;	
	}

	public function setVelocidad($velocidad){
		$this->velocidad = $velocidad;
	}



	public function verBotas(){
		echo 'Velocidad: ' . $this->velocidad;
	}
}
?>
