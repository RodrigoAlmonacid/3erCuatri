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

    //Método tostring
    public function __toString()
    {
        $cadena="Datos de la persona:";
        $cadena.="\nDNI: ".$this->getNroDni();
        $cadena.="\nApellido: ".$this->getApellido();
        $cadena.="\nNombre: ".$this->getNombre();
        $cadena.="\nFecha de nacimiento: ".$this->getFechaNac();
        $cadena.="\nTeléfono: ".$this->getTelefono();
        $cadena.="\nDomicilio: ".$this->getDomicilio();
        return $cadena;
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

    /** funcion que me permite buscar una persona por dni
     * @param int $dni
     * @return bool
     */
    public function buscar($dni){
        $base=new BaseDatos();
        $respuesta=false;
        $consulta="SELECT * FROM persona WHERE NroDni=".$dni.";";
        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $row=$base->Registro();
                if($row){
                    $respuesta=true;
                    $this->setNombre($row['Nombre']);
                    $this->setApellido($row['Apellido']);
                    $this->setTelefono($row['Telefono']);
                    $this->setFechaNac($row['fechaNac']);
                    $this->setNroDni($row['NroDni']);
                    $this->setDomicilio($row['Domicilio']);
                    }
            }
        }
        $base->Cerrar();
        return $respuesta;
    }

        /** funcion para listar todas las personas
     * @return array
     * */
    public function listar(){
        $base=new BaseDatos();
        $consulta="SELECT * FROM persona;";
        $arregloPersonas=[];
        if($base->iniciar()){
            if($base->Ejecutar($consulta)){
                $row=$base->Registro();
                if($row){
                    do{
                        $objPersona=new Persona();
                        $objPersona->setNombre($row['Nombre']);
                        $objPersona->setApellido($row['Apellido']);
                        $objPersona->setTelefono($row['Telefono']);
                        $objPersona->setFechaNac($row['fechaNac']);
                        $objPersona->setNroDni($row['NroDni']);
                        $objPersona->setDomicilio($row['Domicilio']);
                        array_push($arregloPersonas, $objPersona);
                    }while($row = $base->Registro());
                }
            }
        }
        $base->Cerrar();
        return $arregloPersonas;
    }

    /** funcion que me permite insertar una persona
     * @return bool
     */
    public function insertar(){
        $agrega=false;
        $base=new BaseDatos();
        $consulta="INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES";
        $consulta.="(".$this->getNroDni().", '".$this->getApellido()."', '".$this->getNombre()."', '".$this->getFechaNac()."', '".$this->getTelefono()."', '".$this->getDomicilio()."');";
        //echo $consulta;
        if($base->iniciar()){
            if($base->Ejecutar($consulta)){
                $agrega=true;
            }
            else {echo "no se ejecuta la consulta";} 	
        }
        else {echo "no se inicia la conexión";}
        $base->Cerrar();
        return $agrega;   
    }

    /** Funcion que me permite modificar una Persona
     * @return bool
     */
    public function modificar(){
        $base=new BaseDatos();
        $modifica=false;
        $consulta="UPDATE persona SET ";
        $consulta.="NroDni=".$this->getNroDni().", Apellido='".$this->getApellido()."', Nombre='".$this->getNombre()."', fechaNac='".$this->getFechaNac()."', Telefono='".$this->getTelefono()."', Domicilio='".$this->getDomicilio();
        $consulta.="' WHERE NroDni=".$this->getNroDni();    
        //echo $consulta;    
        if($base->iniciar()){
            if($base->Ejecutar($consulta)){
            $modifica=true;
            }
        }
        $base->Cerrar();
        return $modifica;
    }

    /** funcion que me permite eliminar una visita
     * @param int $idVisita
     * @return bool
     */
    public function eliminar($dni){
        $base=new BaseDatos();
        $elimina=false;
        $consulta="DELETE FROM persona WHERE NroDni=".$dni;
        if($base->iniciar()){
            if($base->Ejecutar($consulta)){
                $elimina=true;
            } 	
        }
        $base->Cerrar();
        return $elimina;
    }
}
?>