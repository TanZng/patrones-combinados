<?php
class MascotaPequena extends Criatura
{
  private $sigueme;

  function __construct($nombre, $defensa, $ataque, $nivel)
  {
    parent::__construct($nombre, $defensa, $ataque, $nivel);
    $this->sigueme = true,
  }

  function getSigueme()
  {
    return $this->sigueme;
  }

  function setSigueme($nSigueme)
  {
    $this->sigueme = $nSigueme;
  }

  function pasear()
  {
    $this->sigueme = true;
  }

  function sentar()
  {
    $this->sigueme = false;
  }

  function decSalud($decremento)
  {
    $this->salud -= $decremento / $this->defensa;
  }

  function incNivel()
  {
    $this->nivel += 5;
  }

  function verStats()
  {
    return  parent::verStats() .
            "Sígueme: " . $this->sigueme;
  }
}
?>
