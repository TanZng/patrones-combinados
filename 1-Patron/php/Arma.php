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
}
?>
