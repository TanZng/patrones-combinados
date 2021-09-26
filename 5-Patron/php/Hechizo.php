<?php
include './LibroVentisca.php';
include './LibroLluviaEspadas.php';
include './LibroFortaleza.php';
include './Animacion.php';
include './Sprite.php';
include './Particulas.php';

class Hechizo extends HabilidadMagica{
	private $particulas;
	private $animacion;
	private $sprite;
	private $libro;
	private $ataque;


	public function __construct($nivel, $descripcion,$particulas,$animacion,$sprite,$libro,$ataque){
    parent::__construct($nivel, $descripcion);
    $this->particulas = $particulas;
    $this->libro = $libro;
    $this->animacion = $animacion;
    $this->sprite = $sprite;
    $this->ataque = $ataque;
	}

	public function getNivel(){
		return parent::getNivel();	
	}

	public function setNivel($nivel){
		parent::setNivel($nivel);
	}

	public function getDescripcion(){
		return parent::getDescripcion();	
	}

	public function setDescripcion($descripcion){
		parent::setDescripcion($descripcion);
	}

	public function getParticulas(){
		return $this->particulas;	
	}

	public function setParticulas($particulas){
		$this->particulas = $particulas;
	}

	public function getAnimacion(){
		return $this->animacion;	
	}

	public function setAnimacion($animacion){
		$this->animacion = $animacion;
	}

	public function getSprite(){
		return $this->sprite;	
	}

	public function setSprite($sprite){
		$this->sprite = $sprite;
	}

	public function getLibro(){
		return $this->libro;	
	}

	public function setLibro($libro){
		$this->libro = $sprite;
	}

	public function getAtaque(){
		return $this->ataque;	
	}

	public function setAtaque($ataque){
		$this->ataque = $ataque;
	}

	public function verInfoHabilidad(){
    return  parent::verInfoHabilidad();
  	}

  	public function  subirNivelHabilidad(){
  		return  parent::subirNivelHabilidad();
  	}

  	public function verStats(){
    return  "Ataque: " . $this->ataque .
            "Libro con: " . $this->libro->verStats();
  	}

  	public function crearLibro($tipoLibro,$duracion,$texto){
		if ($tipoLibro == 1) {
        	$this->libro = new LibroFortaleza($duracion,$texto);
        	return $this->libro;
    	} elseif ($tipoLibro == 2) {
        	$this->libro = new LibroVentisca($duracion,$texto);
        	return $this->libro;
    	}elseif ($tipoLibro == 3) {
    		$this->libro = new LibroLluviaEspadas($duracion,$texto);
    		return $this->libro;
    	}else{
    		return null;
    	}
	}
}
?>
