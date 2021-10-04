<?php
class MascotaGrande
{
  private $montura;
  private $armadura;
  private $ultimate;

  function __construct($nombre, $defensa, $ataque, $nivel)
  {
    parent::__construct($nombre, $defensa, $ataque, $nivel);
    $this->montura = null;
    $this->armadura = null;
    $this->ultimate = null;
  }

  function getMontura()
  {
    return $this->montura;
  }

  function setMontura($nMontura)
  {
    $this->montura = $nMontura;
  }

  function getArmadura()
  {
    return $this->armadura;
  }

  function setArmadura($nArmadura)
  {
    $this->armadura = $nArmadura;
  }

  function getUltimate()
  {
    return $this->ultimate;
  }

  function setUltimate($nUltimate)
  {
    $this->ultimate = $nUltimate;
  }

  function usarUltimate()
  {
    return $this->ultimate;
  }

  function atacar()
  {
    return $this->ataque * ($this->nivel * 0.5);
  }

  function decSalud($decremento)
  {
    $this->salud -= $decremento / $this->defensa;
  }

  function incNivel()
  {
    $this->nivel += 1;
  }

  function verStats()
  {
    return  parent::verStats() .
            "Montura: " . $this->montura .
            "Armadura: " . $this->armadura .
            "Ultimate: " . $this->ultimate;
  }
}
?>
