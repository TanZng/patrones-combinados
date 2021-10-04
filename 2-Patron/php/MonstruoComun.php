<?php
class MostruoComun extends Criatura
{
  private $habilidad;
  private $ultimate;
  private $resistencia;

  function __construct($nombre, $defensa, $ataque, $nivel, $habilidad, $ultimate, $resistencia)
  {
    parent::__construct($nombre, $defensa, $ataque, $nivel);
    $this->habilidad = $habilidad;
    $this->ultimate = $ultimate;
    $this->resistencia = $resistencia;
  }

  function getHabilidad()
  {
    return $this->habilidad;
  }

  function setHabilidad($nHabilidad)
  {
    $this->habilidad = $nHabilidad;
  }

  function getUltimate()
  {
    return $this->ultimate;
  }

  function setUltimate($nUltimate)
  {
    $this->ultimate = $nUltimate;
  }

  function getResistencia()
  {
    return $this->resistencia;
  }

  function setResistencia($nResistencia)
  {
    $this->resistencia = $nResistencia;
  }

  function decSalud($decremento)
  {
    $this->salud -= $decremento;
  }

  function incNivel()
  {
    $this->nivel += 2;
  }

  function verStats()
  {
    return  parent::verStats() .
            "Habilidad: " . $this->arma .
            "Ultimate: " . $this->ultimate .
            "Experiencia" $this->experiencia;
  }
}
?>
