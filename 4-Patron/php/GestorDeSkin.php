<?php
class GestorDeSkin
{
  private $skinJugador;

  function __construct()
  {
    $this->skinJugador = NULL;
  }

  function getSkinJugador()
  {
    return $skinJugador;
  }

  function setSkinJugador($nSkin)
  {
    $this->skinJugador = $nSkin;
  }

  function mostrarSkin()
  {
    $this->skinJugador->mostrarSkin();
  }

  function cambiarSkin($tipo, $ruta)
  {
    if ($tipo = "Online")
    {
      $this->skinJugador = new AdaptadorO_SkinOnline($ruta);
    }
    else
    {
      $this->skinJugador = new AdaptadorC_SkinLocal($ruta);
    }

    return $this->skinJugador;
  }

}
?>
