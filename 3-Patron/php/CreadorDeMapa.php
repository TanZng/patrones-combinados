<?php
abstract class CreadorDeMapa{
	private $mapa;

	public function __construct($mapa){
    $this->mapa = $mapa;
	}

	public function getMapa(){
		return $this->mapa;	
	}

	public function setMapa($mapa){
		$this->mapa = $mapa;
	}

	abstract public function CrearMapa();
}
?>