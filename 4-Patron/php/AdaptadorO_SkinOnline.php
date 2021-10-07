<?php
class AdaptadorO_SkinOnline extends Skin
{
  private $skin;

  function __construct($skin)
  {
    $this->skin = $skin;
  }

  function cargarNuevoSkin($ruta)
  {
    $nSkin = $this->skin->getFromServer($ruta);
    $info = $nSkin[0];
    $txs = $nSkin[1];
    $this->skin = new SkinOnline($info, $txs)
    $tipoSkin = "Online";
  }

  function mostrarSkin()
  {
    $this->skin->mostrarTexturaSkin();
  }
}
?>
