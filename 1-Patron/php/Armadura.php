<?php
class Armadura
{
  private $nombre;
  private $nivel;
  private $dano_recibido;
  private $duracion;

  function __construct($nombre, $nivel, $dano_recibido, $duracion)
  {
    $this->nombre = $nombre;
    $this->nivel = $nivel;
    $this->dano_recibido = $dano_recibido;
    $this->duracion = $duracion;
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  function getNivel()
  {
    return $this->nivel;
  }

  function setNivel($nivel)
  {
    $this->nivel = $nivel;
  }

  function getDano_Recibido()
  {
    return $this->dano_recibido;
  }

  function setNivel($dano_recibido)
  {
    $this->dano_recibido = $dano_recibido;
  }

  function getDuracion()
  {
    return $this->duracion;
  }

  function setDuracion($duracion)
  {
    $this->duracion = $duracion;
  }

  function incDanoRecibido($incremento)
  {
    $this->dano_recibido += $incremento;
  }

  function incDuracion($incremento)
  {
    $this->duracion += $incremento;
  }

  function incNivel()
  {
    $this->nivel += 1;
  }
}
?>
