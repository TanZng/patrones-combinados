<?php 
 class Cliente { 
    private $nombre;
    private $apellido;
    private $edad;
    private $correo;
    private $contraseña;



    public function __construct($nombre,$apellido,$edad,$correo,$contraseña) {
    	$this->$nombre = $nombre;
    	$this->$apellido = $apellido;
    	$this->$edad = $edad;
    	$this->$correo = $correo;
    	$this->$contraseña = $contraseña;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function getCorreo(){
        return $this->correo;
    }

    public function setNombre($correo){
        $this->correo = $correo;
    }

    public function getContra(){
        return $this->contraseña;
    }

    public function setContra($contraseña){
        $this->contraseña = $contraseña;
    }
 }
?>