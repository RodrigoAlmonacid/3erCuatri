<?php
    include_once(__DIR__.'/../../modelo/tp4/Auto.php');
    include_once(__DIR__.'/../../modelo/tp4/Persona.php');
    include_once(__DIR__.'/../../helpers/funciones.php');

    function normalizaPatente($patente){
        $normaliza=false;
        if(strlen($patente)==6 || strlen($patente)==7){
            $letras=substr($patente, 0, 3);
            if(strlen($patente)==6){
                $numeros=substr($patente, 3, 3);
            }
            else{
                $numeros=substr($patente, 4, 3);
            }
            if(preg_match('/^[0-9]{3}$/', $numeros) && preg_match('/^[A-Za-z]{3}$/', $letras)){
                $patente=strtoupper($letras)." ".$numeros;
                $normaliza=true;
            }
        }
        $respuesta=["normaliza"=>$normaliza, "patente"=>$patente];
        return $respuesta;
    }

    function consultaPatente($patente){
        $encuentra=false;
        $error="";
        $objAuto=new Auto();
        $chekPatente=normalizaPatente($patente);
        if($chekPatente['normaliza']){
            $patente=$chekPatente['patente'];
            $encuentra=$objAuto->buscar($patente);
            if(!$encuentra){
                $error="Patente no encontrada.";
            }
        }
        else{
            $error="Patente no válida";
        }
        $respuesta=[
            "objeto"=>$objAuto,
            "encuentra"=>$encuentra,
            "error"=>$error
        ];
        return $respuesta;
    }

    function verAutos(){
        $objAuto=new Auto();
        $arregloAutos=$objAuto->listar();
        return $arregloAutos;
    }

    function insertarAuto($datos){
        $objAuto=new Auto();
        $dniDuenio=$datos['dni'];
        $chekPatente=normalizaPatente($datos['dominio']);
        $modelo=$datos['modelo'];
        $marca=$datos['marca'];
        $error="";
        $insertar=false;
        if($chekPatente['normaliza']){
            $objAuto->cargar($chekPatente['patente'], $modelo, $marca, $dniDuenio);
            $insertar=$objAuto->insertar();
            if(!$insertar){
                $error="Error al insertar el auto";
            }
        }
        else{
            $error="Error en el formato de la patente";
        }
        $respuesta=[
            "error"=>$error,
            "inserta"=>$insertar
        ];
        return $respuesta;
    }

    function transferir($datos){
        $chekDni=verificaNumero($datos['dni']);
        $chekPatente=normalizaPatente($datos['dominio']);
        $patente=$chekPatente['patente'];
        $dniNuevoDuenio=$chekDni['valor'];
        $objAuto=new Auto();
        $objPersona=new Persona();
        $buscarAuto=false;
        $buscarPersona=false;
        $modifica=false;
        $error="";
        if($chekDni['verifica'] && $chekPatente['normaliza']){
            $buscarAuto=$objAuto->buscar($patente);
            $buscarPersona=$objPersona->buscar($dniNuevoDuenio);
            if($buscarAuto && $buscarPersona){
                $objAuto->setObjPersona($objPersona);
                $modifica=$objAuto->modificar();
                if($modifica){
                    $buscarAuto=$objAuto->buscar($patente);
                }
                else{
                    $error="No pudo realizarse la transferencia";
                }
            }
        }
        else{
            $error="Datos incorrectos en el formulario";
        }
        $respuesta=[
            "modifica"=>$modifica,
            "encuentraAuto"=>$buscarAuto,
            "encuentraPersona"=>$buscarPersona,
            "objAuto"=>$objAuto,
            "error"=>$error
        ];
        return $respuesta;
    }
?>
