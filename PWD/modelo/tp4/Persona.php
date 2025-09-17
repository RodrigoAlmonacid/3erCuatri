<?php
include_once('BaseDatos.php');
class Persona{
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;

    public function __construct()
    {
        $this->nroDni="";
        $this->apellido="";
        $this->nombre="";
        $this->fechaNac="";
        $this->telefono="";
        $this->domicilio="";
    }

    //Métodos de acceso
    public function getNroDni(){
        return $this->nroDni;
    }
    public function setNroDni($nroDni){
        $this->nroDni=$nroDni;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getFechaNac(){
        return $this->fechaNac;
    }
    public function setFechaNac($fechaNac){
        $this->fechaNac=$fechaNac;
    }

    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }
    public function setDomicilio($domicilio){
        $this->domicilio=$domicilio;
    }

    //Metodos de carga, visualización, modificación y elimnación de datos
    //Cargar una persona
    public function cargar($nombre, $apellido, $telefono, $fechaNac, $nroDni, $domicilio){
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setTelefono($telefono);
        $this->setFechaNac($fechaNac);
        $this->setNroDni($nroDni);
        $this->setDomicilio($domicilio);
    }
}
?>