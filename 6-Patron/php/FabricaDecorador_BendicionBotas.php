<?php
include './FabricaBotas.php';
include './Bota.php';
abstract class FabricaDecorador_BendicionBotas extends FabricaBotas{
	private $botasNormales;
	private $creaBotaAgregada;

	abstract public function crearBotas();
	abstract public function bendecirBotas();
  
}
?>
