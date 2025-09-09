<?php
function muestraDatos(){
    if(!empty($_GET['nombre']) && !empty($_GET['apellido']) && !empty($_GET['edad']) && !empty($_GET['direccion'])){
        $nombre=trim($_GET['nombre']);
        $apellido=trim($_GET['apellido']);
        $edad=trim($_GET['edad']);
        $direccion=trim($_GET['direccion']);
        $regla="/^[a-zA-Záéíóúü\s]+$/";//regla de caracteres admitidos
        if(preg_match($regla, $nombre) && $nombre!="" && preg_match($regla, $apellido) && $apellido!="" && $edad!="" && is_numeric($edad) && preg_match("/^[a-zA-Záéíóúü\s0-9.,°-]+$/", $direccion) && $direccion!=""){
            $respuesta="<h2>Hola, yo soy $nombre, $apellido tengo $edad años y vivo en $direccion.</h2>";
            if($edad>18){
                $respuesta.= "<h2>Soy mayor de edad</h2>";
            }
            else{$respuesta.="<h2>Soy menor de edad</h2>";}
        }
        else{
            $respuesta="<h2>Alguno de los campos es incorrecto en el formulario.</h2>";
        }
    }
    else{
        $respuesta="<h2>Ne se recibieron datos</h2>";
    }
    return $respuesta;
}
?>