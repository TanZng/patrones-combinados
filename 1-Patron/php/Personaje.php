<?php
class Personaje
{
  private $ultimate;
  private $arma;
  private $armadura;
  private $experiencia;

  function __construct($ultimate, $arma, $armadura, $experiencia)
  {
    $this->ultimate = $ultimate;
    $this->arma = $arma;
    $this->armadura = $armadura;
    $this->experiencia = $experiencia;
  }

  function getUltimate()
  {
    return $this->ultimate;
  }

  function setUltimate($ultimate)
  {
    $this->ultimate = $ultimate;
  }

  function getArma()
  {
    return $this->arma;
  }

  function setArma($arma)
  {
    $this->arma = $arma;
  }

  function getArmadura()
  {
    return $this->armadura;
  }

  function setArmadura($armadura)
  {
    $this->armadura = $armadura;
  }

  function getExperiencia()
  {
    return $this->experiencia;
  }

  function setExperiencia($experiencia)
  {
    $this->experiencia = $experiencia;
  }

  function verStats()
  {
    return  "Ultimate: " . $this->ultimate .
            "Arma: " . $this->arma .
            "Armadura: " $this->armadura .
            "Experiencia" $this->experiencia;
  }
}
?>
