<?php
class MonstruoColosal
{
  private $habilidad;
  private $ultimate;
  private $resistencia;
  private $multiplicadorDano;

  function __construct($nombre, $defensa, $ataque, $nivel, $habilidad, $ultimate, $resistencia, $multiplicadorDano)
  {
    parent::__construct($nombre, $defensa, $ataque, $nivel);
    $this->habilidad = $habilidad;
    $this->ultimate = $ultimate;
    $this->resistencia = $resistencia;
    $this->multiplicadorDano = $multiplicadorDano;
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

  function getMultiplicador()
  {
    return $this->multiplicadorDano;
  }

  function setMultiplicador($nMultiplicadorDano)
  {
    $this->multiplicadorDano = $nMultiplicadorDano;
  }

  function usarUltimate()
  {
    return $this->ultimate;
  }

  function aumentarResistencia()
  {
    return 
  }

  function atacar()
  {

  }

  function decSalud()
  {

  }

  function incNivel()
  {

  }

  function verStats()
  {

  }
}
?>
