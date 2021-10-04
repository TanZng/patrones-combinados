<?php
class GestorDeResistencia
{
  private $resistencia;

  function __construct($resistencia)
  {
    $this->resistencia = $resistencia;
  }

  function generarUltimate()
  {
    return new Resistencia(1,10);
}
?>
