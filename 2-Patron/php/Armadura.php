<?php
class Armadura
{
  private $nombre;
  private $danoRecibido;
  private $nivel;
  private $duracion;

  function setNombre()
  {
    return $this->nombre;
  }

  function getNombre($nNombre)
  {
    $this->nombre = $nNombre;
  }

  function setDanoRecibido()
  {
    return $this->danoRecibido;
  }

  function getDanoRecibido($nDano)
  {
    $this->danoRecibido = $nDano;
  }

  function setNivel()
  {
    return $this->nivel;
  }

  function getNivel($nNivel)
  {
    $this->nivel = $nNivel;
  }

  function setDuracion()
  {
    return $this->duracion;
  }

  function getDuracion($nDuracion)
  {
    $this->duracion = $nDuracion;
  }

  function incDañoRecibido($incremento)
  {
    $this->danoRecibido += $incremento;
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
