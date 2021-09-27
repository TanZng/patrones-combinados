<?php
include './FabricaDecorador_BendicionBotas.php';
include './Bendicion_BotasRecorrer.php';
class DecoratorB_BotasRecorrer extends FabricaDecorador_BendicionBotas{
	private $bendecirBotasRecorrer;

	public function __construct($bendecirBotasRecorrer,$botasNormales,$creaBotaAgregada){
    	$this->bendecirBotasRecorrer = $bendecirBotasRecorrer;
    	$this->botasNormales = $botasNormales;
    	$this->creaBotaAgregada = $creaBotaAgregada;
	}

	public function __construct(){
    	$this->bendecirBotasRecorrer = null;
    	$this->botasNormales = null;
    	$this->creaBotaAgregada = null;
	}
 	
 	public function bendecirBotas($botas){
 		echo ' El dios de la furia ha bendecido tus botas de ' . $botas->getVelocidad() . ' de velocidad';
 		$velocidadNueva = $botas->getVelocidad() + 50;
 		$botas->setVelocidad($velocidadNueva);
 		echo ' a ' . $velocidadNueva() . ' de velocidad';
    	return $botas;
	}

	public function crearBotas(){
    	$nuevaBotaR = new Bendicion_BotasRecorrer('Bendición del dios de la furia');
    	$this->bendecirBotasRecorrer = $nuevaBotaR;
	}
}
?>