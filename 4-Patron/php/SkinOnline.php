<?php
class SkinOnline
{
  private $infoSkin;
  private $texturaSkin;

  function __construct($info, $txs)
  {
    $this->infoSkin = $info;
    $this->texturaSkin = $txs;
  }

  function getInfoSkin()
  {
    return $this->infoSkin;
  }

  function setInfoSkin($nInfo)
  {
    $this->infoSkin = $nInfo;
  }

  function getTextura()
  {
    return $this->texturaSkin;
  }

  function setTextura($nTextura)
  {
    $this->texturaSkin = $nTextura;
  }

  function mostrarInfoSkin()
  {
    $infSkin = $this->infoSkin->getInfoSkin();
    return  "Autor: " . $infSkin[0] .
            "Fecha: " . $infSkin[1].
            "Descripción: " $infSkin[2] .
  }

  function mostrarTexturaSkin()
  {
    $this->texturaSkin->mostrarTextura();
  }
}
?>
