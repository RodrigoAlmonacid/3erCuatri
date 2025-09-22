<?php
    include_once(__DIR__.'/../../modelo/tp4/Auto.php');
    include_once(__DIR__.'/../../modelo/tp4/Persona.php');
    include_once('buscarPatente.php');
    $objPersona=new Persona();
    $arregloPersonas=$objPersona->listar();
    function buscarPersona($dni){
        //Falta validar el dni
        $objPersona=new Persona();
        $encuentra=$objPersona->buscar($dni);
        $error="";
        if($encuentra){
            $consulta="SELECT a.Patente, a.Marca, a.Modelo FROM auto a INNER JOIN persona p ON a.DniDuenio=p.NroDni WHERE a.DniDuenio='$dni';";
            $base=new BaseDatos();
            $respuesta=false;
            $arregloAuto=[];
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
?>