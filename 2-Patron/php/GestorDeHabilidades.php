<?php
class GestorDeHabilidades
{
  private $habilidad;

  function __construct($habilidad)
  {
    $this->habilidad = $habilidad;
  }

  function generarHabilidad()
  {
    return new Habilidad(10, 1);
}
?>
