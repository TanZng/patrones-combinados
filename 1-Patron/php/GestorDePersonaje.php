<?php
class GestorDePersonaje
{
  private $personaje;

  function __construct($personaje)
  {
    $this->personaje = $personaje;
  }

  function mejorarUltimate($mejora)
  {
    $gUltimate = new GestorDeUltimate($this->personaje->getUltimate());
    $gUltimate->subirDeNivel($mejora);
  }

  function mejorarArmadura($mejora)
  {
    $gArmadura = new GestorDeArmadura($this->personaje->getArmadura());
    $gArmadura->mejorarArmadura($mejora);
  }

  function mejorarArma($mejora)
  {
    $gArma = new GestorDeArma($this->personaje->getArma());
    $gArma->aumentarDano($mejora);
  }

  function verStats()
  {
    return $this->personaje->verStats();
  }

  function generarPersonaje()
  {

  }
}
?>
