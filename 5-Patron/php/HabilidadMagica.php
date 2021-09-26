<?php
abstract class HabilidadMagica{
	private $nivel;
	private $descripcion;

	public function __construct($nivel, $descripcion){
    $this->nivel = $nivel;
    $this->descripcion = $descripcion;
	}

	public function getNivel(){
		return $this->nivel;	
	}

	public function setNivel($nivel){
		$this->nivel = $nivel;
	}

	public function getDescripcion(){
		return $this->descripcion;	
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function verInfoHabilidad(){
    return  "Nivel: " . $this->nivel .
            "Descripción: " . $this->descripcion;
  	}

  	public function  subirNivelHabilidad(){
  		$this->nivel +=1;
  	}
}
?>
