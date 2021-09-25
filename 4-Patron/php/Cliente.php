<?php
class Cliente
{
  private $nombre;
  private $apellido;
  private $edad;
  private $correo;
  private $contrasena;

  function __construct($nombre,$apellido,$edad,$correo,$contrasena, $skinPersonaje)
  {
    $this->$nombre = $nombre;
    $this->$apellido = $apellido;
    $this->$edad = $edad;
    $this->$correo = $correo;
    $this->$contrasena = $contrasena;
    $this->$skinPersonaje = $skinPersonaje
  }

  function getNombre()
  {
    return $this->nombre;
  }

  function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  function getApellido()
  {
    return $this->apellido;
  }

  function setApellido($apellido)
  {
    $this->apellido = $apellido;
  }

  function getEdad()
  {
    return $this->edad;
  }

  function setEdad($edad)
  {
    $this->edad = $edad;
  }

  function getCorreo()
  {
    return $this->correo;
  }

  function setNombre($correo)
  {
    $this->correo = $correo;
  }

  function getContra()
  {
    return $this->contraseña;
  }

  function setContra($contraseña)
  {
    $this->contraseña = $contraseña;
  }

  function autenticar()
  {
    //
  }

  function cambiarSkin($tipo, $ruta)
  {
    $gSkin = new GestorDeSkin();
    $skinPersonaje = $gSkin->cambiarSkin($tipo, $ruta);
  }
}
?>
