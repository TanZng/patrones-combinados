<?php
class Particulas{
	private $id;
	private $archivo;

	public function __construct($id, $archivo){
    $this->id = $id;
    $this->archivo = $archivo;
	}

	public function getId(){
		return $this->id;	
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getArchivo(){
		return $this->archivo;	
	}

	public function setArchivo($archivo){
		$this->archivo = $archivo;
	}

	public function cargarParticulas(){
		$ruta = 'C:\CyberMagik2069\Particles\Particulas.txt';
		echo 'Cargando archivo...';
		echo $ruta . ' detectada.';
	}
}
?>
