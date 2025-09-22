<?php
include_once('Persona.php');
include_once('BaseDatos.php');
class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private Persona $objPersona;//referencia a persona
    private $error;

    public function __construct()
    {
        $this->patente="";
        $this->marca="";
        $this->modelo="";
        $this->objPersona=new Persona();
        $this->error="";
    }

    //Métodos de acceso
    public function getPatente(){
        return $this->patente;
    }
    public function setPatente($patente){
        $this->patente=$patente;
    }

    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca=$marca;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function getObjPersona(){
        return $this->objPersona;
    }
    public function setObjPersona($objPersona){
        $this->objPersona=$objPersona;
    }

    public function getError(){
        return $this->error;
    }
    public function setError($error){
        $this->error=$error;
    }

    //Método toString
    public function __toString()
    {
        $cadena="Información del vehiculo:";
        $cadena.="\nPatente: ".$this->getPatente();
        $cadena.="\nModelo: ".$this->getModelo();
        $cadena.="\nMarca: ".$this->getMarca();
        $cadena.="\nTitular: ".$this->getObjPersona();
        return $cadena;
    }

    //Método para cargar datos de un vehiculo
    public function cargar($patente, $modelo, $marca, $dniDuenio){
        $objPersona=new Persona();
        $buscar=$objPersona->buscar($dniDuenio);
        if($buscar){
            $this->setPatente($patente);
            $this->setModelo($modelo);
            $this->setMarca($marca);
            $this->setObjPersona($objPersona);
        }
        else{
            $error="Error al buscar la persona con dni '$dniDuenio'.\n";
            $this->setError($error);
        }
    }

    /** funcion que me permite buscar un vehiculo por patente
     * @param int $ipatente
     * @return bool
     */
    public function buscar($patente){
        $base=new BaseDatos();
        $respuesta=false;
        $consulta="SELECT * FROM auto WHERE Patente='".$patente."';";
        if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $row=$base->Registro();
                if($row){
                    $respuesta=true;
                    $this->setPatente($row['Patente']);
                    $this->setMarca($row['Marca']);
                    $this->setModelo($row['Modelo']);
                    $objPersona=new Persona();
                    $objPersona->buscar($row['DniDuenio']);
                    $this->setObjPersona($objPersona);
                    }
            }
        }
        $base->Cerrar();
        return $respuesta;
    }

    /** funcion para listar todos los vehiculos
     * @return array
     * */
    public function listar(){
        $base=new BaseDatos();
        $consulta="SELECT * FROM auto;";
        $arregloAuto=[];
        if($base->iniciar()){
            if($base->Ejecutar($consulta)){
                $row=$base->Registro();
                if($row){
                    do{
                        $objAuto=new Auto();
                        $objAuto->setPatente($row['Patente']);
                        $objAuto->setMarca($row['Marca']);
                        $objAuto->setModelo($row['Modelo']);
                        $objPersona=new Persona();
                        $objPersona->buscar($row['DniDuenio']);
                        $objAuto->setObjPersona($objPersona);
                        array_push($arregloAuto, $objAuto);
                    }while($row = $base->Registro());
                }
            }
        }
        $base->Cerrar();
        return $arregloAuto;
    }

    /** funcion que me permite insertar un vehiculo
     * @return bool
     */
    public function insertar(){
        $objPersona=$this->getObjPersona();
        $agrega=false;
        $base=new BaseDatos();
        $consulta="INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) VALUES";
        $consulta.="('".$this->getPatente()."', '".$this->getMarca()."', ".$this->getModelo().", '".$objPersona->getNroDni()."');";
        //echo $consulta;
        if($base->iniciar()){
            if($base->Ejecutar($consulta)){
                $agrega=true;
            }
            else {
                $error="no se ejecuta la consulta";
                $this->setError($error);
            } 	
        }
        else {
            $error="no se inicia la conexión";
            $this->setError($error);
        }
        $base->Cerrar();
        return $agrega;   
    }

    /** Funcion que me permite modificar un vehiculo
     * @return bool
     */
    public function modificar(){
        $objPersona=$this->getObjPersona();
        $base=new BaseDatos();
        $modifica=false;
        $consulta="UPDATE auto SET ";
        $consulta.="Patente='".$this->getPatente()."', Marca='".$this->getMarca()."', Modelo=".$this->getModelo().", DniDuenio='".$objPersona->getNroDni();
        $consulta.="' WHERE Patente='".$this->getPatente()."';";    
        echo $consulta;    
        if($base->iniciar()){
            if($base->Ejecutar($consulta)){
            $modifica=true;
            }
        }
        $base->Cerrar();
        return $modifica;
    }

    /** funcion que me permite eliminar un vehiculo
     * @param int $idVisita
     * @return bool
     */
    public function eliminar($patente){
        $base=new BaseDatos();
        $elimina=false;
        $consulta="DELETE FROM auto WHERE Patente='".$patente."';";
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