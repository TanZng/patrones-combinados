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
    // Se debe obtener la información y la textura desde la ruta D:

    $this->skin = new SkinOnline($info, $txs)
    $tipoSkin = "Online";
  }

  function mostrarSkin()
  {
    $this->skin->mostrarTexturaSkin();
  }
}
?>
