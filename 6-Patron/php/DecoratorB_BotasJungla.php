<?php
include './FabricaDecorador_BendicionBotas.php';
include './Bendicion_BotasJungla.php';
class DecoratorB_BotasJungla extends FabricaDecorador_BendicionBotas{
	private $bendecirBotasJungla;

	public function __construct($bendecirBotasJungla,$botasNormales,$creaBotaAgregada){
    	$this->bendecirBotasJungla = $bendecirBotasJungla;
    	$this->botasNormales = $botasNormales;
    	$this->creaBotaAgregada = $creaBotaAgregada;
	}
 	
 	public function __construct(){
    	$this->bendecirBotasJungla = null;
    	$this->botasNormales = null;
    	$this->creaBotaAgregada = null;
	}
 	public function bendecirBotas($botas){
    	echo ' El dios de la jungla ha bendecido tus botas de ' . $botas->getVelocidad() . ' de velocidad';
 		$velocidadNueva = $botas->getVelocidad() + 20;
 		$botas->setVelocidad($velocidadNueva);
 		echo ' a ' . $velocidadNueva() . ' de velocidad y obtuviste un bono de daño jungla';
    	return $botas;
	}

	public function crearBotas(){
    	$nuevaBotaJ = new Bendicion_BotasJungla('Bendición del dios de la jungla');
    	$this->bendecirBotasRecorrer = $nuevaBotaJ;
	}
}
?>
