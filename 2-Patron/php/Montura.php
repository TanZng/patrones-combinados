<?php
class Montura
{
  private $nombre;
  private $velocidad;
  private $nivel;

  function __construct($nombre, $velocidad, $nivel)
  {
    $this->nombre = $nombre;
    $this->velocidad = $velocidad;
    $this->nivel = $nivel;
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function setNombre($nNombre)
  {
    $this->nombre = $nNombre;
  }

  function getVelocidad()
  {
    return $this->velocidad;
  }

  function setVelocidad($nVelocidad)
  {
    $this->velocidad = $nVelocidad;
  }

  function getNivel()
  {
    return $this->nivel;
  }

  function setNivel($nNivel)
  {
    $this->nivel = $nNivel
  }

  function incNivel()
  {
    $this->nivel += 1;
  }
}
?>
