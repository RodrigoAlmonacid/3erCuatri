<?php
class Usuario{
    //atributos
    private $id_usuario;
    private $nom_usuario;
    private $pass_usuario;
    private $email_usuario;
    private $deshabilit_usuario;

    public function __construct()
    {
        $this->id_usuario=null;
        $this->nom_usuario="";
        $this->pass_usuario="";
        $this->email_usuario="";
        $this->deshabilit_usuario=null;
    }
    
}
?>