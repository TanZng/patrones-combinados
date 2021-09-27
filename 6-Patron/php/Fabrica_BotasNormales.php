<?php
include './FabricaBotas.php';
include './Bota.php';
class Fabrica_BotasNormales extends FabricaBotas{
	private $botasNormales;

	public function __construct($botasNormales){
    	$this->botasNormales = $botasNormales;
	}
 	
 	public function solicitarBotas(){
    	return $this->botasNormales;
	}

	public function crearBotas(){
    	$nuevaBotaN = new Bota(100);
    	$this->botasNormales = $nuevaBotaN;
	}

}
?>
