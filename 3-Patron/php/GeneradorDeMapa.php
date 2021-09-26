<?php
include './CreadorMapaJungla.php';
include './CreadorMapaNieve.php';
include './CreadorMapaLava.php';
class GeneradorDeMapa{
	private $mapa;
	private $tipo;

	public function __construct($mapa, $tipo){
    $this->mapa = $mapa;
    $this->tipo = $tipo;
	}
	public function __construct(){}

	public function getMapa(){
		return $this->mapa;	
	}

	public function setMapa($mapa){
		$this->mapa = $mapa;
	}

	public function getTipo(){
		return $this->tipo;	
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function setTipoMapa($tipoMapa){
		if ($tipoMapa == 'nieve') {
        	$this->tipo = new CreadorMapaNieve();
    	} elseif ($tipoMapa == 'lava') {
        	$this->tipo = new CreadorMapaLava();
    	}elseif ($tipoMapa == 'jungla') {
    		$this->tipo = new CreadorMapaJungla();
    	}
	}

	public function generar(){
		if($this->tipo == null){
			retun null;
		}else{
			$mapaGenerado = tipo->crearMapa();
			return $mapaGenerado;
		}
	}

	public function verMapa(){
		return $this->mapa->verMapa();

	}
}
?>
