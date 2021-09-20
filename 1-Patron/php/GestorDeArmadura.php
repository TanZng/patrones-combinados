<?php
class GestorDeArmadura
{
  private $armadura;

  function __construct($armadura)
  {
    $this->armadura = $armadura;
  }

  function mejorarArmadura($mejora)
  {
    $this->armadura->incNivel($mejora);
  }

  function repararArmadura($reparacion)
  {
    $this->armadura->incDuracion($reparacion);
  }

  function generarArmadura($nombre, $nivel, $dano_recibido, $duracion)
  {
    return new Armadura($nombre, $nivel, $dano_recibido, $duracion);
  }
}
?>
