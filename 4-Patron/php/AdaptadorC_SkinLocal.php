<?php
class AdaptadorC_SkinLocal extends Skin implements ISkinLocal
{
  private $skin;

  function __construct()
  {
    $this->skin = NULL;
  }

  function cargarSkinLocal($ruta)
  {
    $this->skin = $ruta
    $tipoSkin = "Local";
  }

  function mostrarSkin()
  {
    echo "<img src='" . $skin . "' alt='skin'>"
  }
}
?>
