<?php
include './IMapa.php';
include './Mazmorra.php';
include './Textura.php';
include './Tesoro.php';

class Mapa implements IMapa{
	private $mazmorra;
	private $tesoro;
	private $textura;


	public function __construct($mazmorra, $tesoro, $textura){
    $this->mazmorra = $mazmorra;
    $this->tesoro = $tesoro;
    $this->textura = $textura;
	}

	public function getMazmorra(){
		return $this->mazmorra;	
	}

	public function setMazmorra($mazmorra){
		$this->mazmorra = $mazmorra;
	}

	public function getTesoro(){
		return $this->tesoro;	
	}

	public function setTesoro($tesoro){
		$this->tesoro = $tesoro;
	}

	public function getTextura(){
		return $this->textura;	
	}

	public function setTextura($textura){
		$this->textura = $textura;
	}

	public function verMapa(){
    return  "Mazmorra: " . $this->mazmorra .
            "Tesoro: " . $this->tesoro .
            "Textura: " $this->textura;
  	}
}
?>
