<?php
class Tesoro{
	private $bonus;
	private $monedas;

	public function __construct($bonus, $monedas){
    $this->bonus = $bonus;
    $this->monedas = $monedas;
	}

	public function getBonus(){
		return $this->bonus;	
	}

	public function setBonus($bonus){
		$this->bonus = $bonus;
	}

	public function getMonedas(){
		return $this->monedas;	
	}

	public function setMonedas($monedas){
		$this->monedas = $monedas;
	}

	public function incBonus(){
		$this->bonus += 1.01;
	}
}
?>
