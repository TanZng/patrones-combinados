<?php
class Animacion{
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

	public function cargarAnimacion(){
		$ruta = 'C:\CyberMagik2069\Animations\Animacion.txt';
		if(readfile($ruta) == null){
			return false;
		}else{
			return true;
		}

	}
}
?>
