<?php
include_once('conector/conector.php');
class Usuario{
    //atributos
    private $id_usuario;
    private $nom_usuario;
    private $pass_usuario;
    private $email_usuario;
    private $desHabilitado_usuario;

    public function __construct()
    {
        $this->id_usuario=null;
        $this->nom_usuario="";
        $this->pass_usuario="";
        $this->email_usuario="";
        $this->desHabilitado_usuario=null;
    }
    
    //Métodos de acceso
    public function getId_usuario(){
        return $this->id_usuario;
    }
    public function setId_usuario($id){
        $this->id_usuario=$id;
    }

    public function getNom_usuario(){
        return $this->nom_usuario;
    }
    public function setNom_usuario($nombre){
        $this->nom_usuario=$nombre;
    }

    public function getPass_usuario(){
        return $this->pass_usuario;
    }
    public function setPass_usuario($pass){
        $this->pass_usuario=$pass;
    }

    public function getEmail_usuario(){
        return $this->email_usuario;
    }
    public function setEmail_usuario($email){
        $this->email_usuario=$email;
    }

    public function getDesHabilitado_usuario(){
        return $this->desHabilitado_usuario;
    }
    public function setDesHabilitado_usuario($desHabilitado){
        $this->desHabilitado_usuario=$desHabilitado;
    }

    //método toString
    public function __toString()
    {
        $usuario="ID: ".$this->getId_usuario()."\n";
        $usuario.="Nombre: ".$this->getNom_usuario()."\n";
        $usuario.="Contraseña: ".$this->getPass_usuario()."\n";
        $usuario.="Email: ".$this->getEmail_usuario()."\n";
        $usuario.="Estado: ";
        if($this->getDesHabilitado_usuario()){
            $usuario.="habilitadoado.\n";
        }
        else{
            $usuario.="deshabilitadoado.\n";
        }
        return $usuario;
    }

    //cargar usuario
    public function cargar($nombre, $email, $contraseña){
        $this->setNom_usuario($nombre);
        $this->setEmail_usuario($email);
        $this->setPass_usuario($contraseña);
    }

    //buscar un usuario por id
    public function buscar($id){
        $base=new BaseDatos();
        $consulta="SELECT * FROM usuario WHERE id_usuario=".$id.";";
        
    }
}
?>