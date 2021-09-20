<?php
class Ultimate
{
  private $nombre;
  private $dano;
  private $nivel;

  function __construct($nombre, $dano, $nivel)
  {
    $this->nombre = $nombre;
    $this->dano = $dano;
    $this->nivel = $nivel
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  function getDano()
  {
    return $this->dano;
  }

  function setDano($Dano)
  {
    $this->dano = $dano;
  }

  function getNivel()
  {
    return $this->nivel;
  }

  function setNivel($nivel)
  {
    $this->nivel = $nivel;
  }

  function incNivel($incremento)
  {
    $this->nivel += $incremento;
  }
}
?>
