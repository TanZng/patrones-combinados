<?php
include './Libro.php';
class LibroVentisca extends Libro{
	private $duracion;
	private $texto;

	public function __construct($duracion, $texto){
    $this->duracion = $duracion;
    $this->texto = $texto;
	}

	public function getDuracion(){
		return $this->duracion;	
	}

	public function setDuracion($duracion){
		$this->duracion = $duracion;
	}

	public function getTexto(){
		return $this->texto;	
	}

	public function setTexto($texto){
		$this->texto = $texto;
	}

	public function verStats(){
    return  "Duración: " . $this->duracion .
            "Escrito antiguo: " . $this->texto;
  	}
}
?>
