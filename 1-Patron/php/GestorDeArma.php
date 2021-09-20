<?php
class GestorDeArma
{
  private $arma;

  function __construct($arma)
  {
    $this->arma = $arma;
  }

  function repararArma($reparacion)
  {
    $this->arma->duracion += $reparacion;
  }

  function mejorarArma($mejora)
  {
    $this->arma->aumentarDano($mejora);
  }

  function cambiarHechizo($hechizo)
  {
    $this->arma->setHechizo($hechizo);
  }

  function generarArma($nombre,$dano_inflingido,$duracion,$nivel)
  {
    return new Arma($nombre,$dano_inflingido,$duracion,$nivel);
  }
}
?>
