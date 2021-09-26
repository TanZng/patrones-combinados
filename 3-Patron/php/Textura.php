<?php
class Textura{
	private $imagen;
	private $alto;
	private $ancho;

	public function __construct($imagen, $alto, $ancho){
    $this->imagen = $imagen;
    $this->alto = $alto;
    $this->ancho = $ancho;
	}

	public function getImagen(){
		return $this->imagen;	
	}

	public function setImagen($imagen){
		$this->imagen = $imagen;
	}

	public function getAlto(){
		return $this->alto;	
	}

	public function setAlto($alto){
		$this->alto = $alto;
	}

	public function getAncho(){
		return $this->ancho;	
	}

	public function setAncho($ancho){
		$this->ancho = $ancho;
	}

}
?>
