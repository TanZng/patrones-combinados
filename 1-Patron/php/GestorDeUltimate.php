<?php
class GestorDeUltimate
{
  private $ultimate;

  function __construct($ultimate)
  {
    $this->$ultimate = $ultimate;
  }

  function subirDeNivel($incremento)
  {
    $this->ulimate->incNivel($incremento);
  }

  function generarUltimate($nombre, $dano, $nivel)
  {
    return new Ultimate($nombre, $dano, $nivel);
  }
}
?>
