<?php
abstract class Criatura
{
  private $nombre;
  private $defensa;
  private $ataque;
  private $nivel;

  function __construct($nombre, $defensa, $ataque, $nivel)
  {
    $this->nombre = $nombre;
    $this->defensa = $defensa;
    $this->ataque = $ataque;
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

  function getDefensa()
  {
    return $this->defensa;
  }

  function setDefensa($nDefensa)
  {
    $this->$defensa = $nDefensa;
  }

  function getAtaque()
  {
    return $this->ataque;
  }

  function setAtaque($nAtaque)
  {
    $this->ataque = $nAtaque;
  }

  function getNivel()
  {
    return $this->nivel;
  }

  function setNivel($nNivel)
  {
    $this->nivel = $nNivel;
  }

  function verStats()
  {
    return  "Nombre: " . $this->nombre .
            "Defensa: " . $this->defensa .
            "Ataque: " $this->ataque .
            "Nivel" $this->nivel;
  }

  abstract function decSalud();
  abstract function incNivel();
}
?>
