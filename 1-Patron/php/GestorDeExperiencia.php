<?php
class GestorDeExperiencia
{
  private $experiencia;

  function __construct($experiencia)
  {
    $this->experiencia = $experiencia;
  }

  function subirExperiencia($incremento)
  {
    $this->experiencia->incTotal($incremento);
  }

  function generarExperiencia()
  {
    return new Experiencia()
  }
}
?>
