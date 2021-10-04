<?php
class GestorDeUltimate
{
  private $ultimate;

  function __construct($ultimate)
  {
    $this->ultimate = $ultimate;
  }

  function subirDeNivel($incremento)
  {
    return $this->ultimate->incNivel($incremento);
  }

  function generarUltimate()
  {
    return new Ultimate("Basic", 10, 1);
  }
}
?>
