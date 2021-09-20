<?php
class Arma
{
  private $nombre;
  private $dano_inflingido;
  private $duracion;
  private $nivel;
  private $hechizo;

  function __construct($nombre,$dano_inflingido,$duracion,$nivel)
  {
    $this->$nombre = $nombre;
    $this->$dano_inflingido = $dano_inflingido;
    $this->$duracion = $duracion;
    $this->$nivel = $nivel;
    $this->$hechizo = NULL;
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  function getDano_Inflingido()
  {
    return $this->dano_inflingido;
  }

  function setDano_Inflingido($dano_inflingido)
  {
    $this->dano_inflingido = $dano_inflingido;
  }

  function getDuracion()
  {
    return $this->duracion;
  }

  function setDuracion($duracion)
  {
    $this->duracion = $duracion;
  }

  function getDuracion()
  {
    return $this->duracion;
  }

  function setDuracion($duracion)
  {
    $this->duracion = $duracion;
  }

  function getNivel()
  {
    return $this->nivel;
  }

  function setNivel($nivel)
  {
    $this->nivel = $nivel;
  }

  function getHechizo()
  {
    return $this->hechizo;
  }

  function setDuracion($hechizo)
  {
    $this->hechizo = $hechizo
  }

  function aumentarDano($aumento)
  {
    $this->dano_inflingido += $aumento;
  }

  function setHechizo($hechizo)
  {
    $this->hechizo = $hechizo;
  }

  function incNivel()
  {
    $this->nivel += 1;
  }
}
?>
