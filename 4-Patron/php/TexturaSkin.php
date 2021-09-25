<?php
class TexturaSkin
{
  private $rutaTextura;

  function __construct($rutaTextura)
  {
    $this->rutaTextura = $rutaTextura
  }

  function getRuta()
  {
    return $this->rutaTextura;
  }

  function setRuta($nRuta)
  {
    $this->rutaTextura = $nRuta;
  }

  function mostrarTextura()
  {
    echo "<img src='" . $rutaTextura . "' alt='skin'>"
  }
}
?>
