<?php
    include_once(__DIR__.'/../../modelo/tp4/Auto.php');
    include_once(__DIR__.'/../../modelo/tp4/Persona.php');
    include_once('buscarPatente.php');
    
    function verPersonas(){
        $objPersona=new Persona();
        $respuesta=$objPersona->listar();
        return $respuesta;
    }
    
    function buscarPersona($dni){
        //Falta validar el dni
        $objPersona=new Persona();
        $encuentra=$objPersona->buscar($dni);
        $respuesta=[
            'encuentra'=>$encuentra,
            'persona'=>$objPersona
        ];
        return $respuesta;
    }

    function buscarAutoPersona($dni){
        $error="";
        $arregloAuto=[];
        $buscar=buscarPersona($dni);
        $encuentra=$buscar['encuentra'];
        $objPersona=$buscar['persona'];
        if($encuentra){
            $consulta="SELECT Patente, Marca, Modelo FROM auto WHERE DniDuenio='$dni';";
            $base=new BaseDatos();
            $respuesta=false;
            if($base->Iniciar()){
                if($base->Ejecutar($consulta)){
                    $row=$base->Registro();
                    if($row){   
                        do{
                            $unAuto=[
                            "Patente"=>$row['Patente'],
                            "Marca"=>$row['Marca'],
                            "Modelo"=>$row['Modelo']
                            ];
                            array_push($arregloAuto, $unAuto);
                        }while($row = $base->Registro());
                    }
                }
            }
        }
        else{
            $error="Persona no encontrada";
        }
        $respuesta=[
            "encuentra"=>$encuentra,
            "arreglo"=>$arregloAuto,
            "persona"=>$objPersona,
            "error"=>$error
        ];
        return $respuesta;
    }

    function insertarPersona($datos){
        $dni=$datos['dni'];
        $nombre=$datos['nombre'];
        $apellido=$datos['apellido'];
        $domicilio=$datos['domicilio'];
        $telefono=$datos['telefono'];
        $fechaNac=$datos['fechaNac'];
        $objPersona=new Persona();
        $error="";
        $objPersona->cargar($nombre, $apellido, $telefono, $fechaNac, $dni, $domicilio);
        $inserta=$objPersona->insertar();
        if(!$inserta){
            $error="No pudo incluirse la persona en la base de datos";
        }
        $respuesta=[
            "inserta"=>$inserta,
            "error"=>$error
        ];
        return $respuesta;
    }
?>