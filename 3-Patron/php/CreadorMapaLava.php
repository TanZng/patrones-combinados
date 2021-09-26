<?php
include './CreadorDeMapa.php';
include './Mapa.php';
include './Mazmorra.php';
include './Textura.php';
include './Tesoro.php';

class CreadorMapaLava extends CreadorDeMapa{
	public function __construct($mapa){
    	parent::__construct($mapa);
	}
	public function crearMapa(){
	    $mazmorra = new Mazmorra();
	    $textura = new Textura('lava.png',140,300);
	    $tesoro = new Tesoro(100,2000);
	    $mapa = new Mapa($mazmorra,$tesoro,$textura);
	    return $mapa;
	}

	public function getMapa(){
		return parent::getMapa();	
	}

	public function setMapa($mapa){
		return parent::setMapa($mapa);
	}
}
?>
