<?php
class Skin
{
  private $nombreSkin;
  private $tipoSkin;

  function __construct($nSkin, $tSkin)
  {
    $this->nombreSkin = $nskin;
    $this->tipoSkin = $tskin;
  }

  function getNombreSkin()
  {
    return $this->nombreSkin;
  }

  function setNombreSkin($nNombre)
  {
    $this->nombreSkin = $nNombre;
  }

  function getTipoSkin()
  {
    return $this->tipoSkin;
  }

  function setTipoSkin($nTipo)
  {
    $this->tipoSkin = $nTipo;
  }

}
?>
