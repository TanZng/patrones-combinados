<?php
class InfoSkin
{
  private $autor;
  private $fechaCreacion;
  private $descripcion;

  function __construct($autor, $fecha, $descripcion)
  {
    $this->autor = $autor;
    $this->fechaCreacion = $fecha;
    $this->descripcion = $descripcion;
  }

  function getAutor()
  {
    return $this->autor;
  }

  function setAutor($nAutor)
  {
    $this->autor = $nAutor;
  }

  function getFecha()
  {
    return $this->fechaCreacion;
  }

  function setFecha($nFecha)
  {
    $this->fechaCreacion = $nFecha;
  }

  function getDescripcion()
  {
    return $this->descripcion;
  }

  function setDescripcion($nDescripcion)
  {
    $this->descripcion = $nDescripcion;
  }

  function getInfoSkin()
  {
    return  [$this->autor, $this->fechaCreacion, $this->descripcion ];
  }
}
?>
