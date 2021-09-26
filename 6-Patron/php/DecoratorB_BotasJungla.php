<?php
include './FabricaDecorador_BendicionBotas.php';
include './Bendicion_BotasJungla.php';
class DecoratorB_BotasJungla extends FabricaDecorador_BendicionBotas{
	private $bendecirBotasJungla;

	public function __construct($bendecirBotasJungla){
    	$this->bendecirBotasJungla = $bendecirBotasJungla;
	}
 	
 	public function bendecirBotasJungla($botas){
    	return $this->bendecirBotasJunglas;
	}

	public function crearBotas(){
    	$nuevaBotaJ = new Bendicion_BotasJungla('Bendición del dios de la jungla');
	}
}
?>
