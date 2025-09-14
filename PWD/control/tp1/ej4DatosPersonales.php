<?php
function muestraDatos($datos){
    if(!empty($datos['nombre']) && !empty($datos['apellido']) && !empty($datos['edad']) && !empty($datos['direccion'])){
        $nombre=trim($datos['nombre']);
        $apellido=trim($datos['apellido']);
        $edad=trim($datos['edad']);
        $direccion=trim($datos['direccion']);
        $regla="/^[a-zA-Záéíóúü\s]+$/";//regla de caracteres admitidos
        if(preg_match($regla, $nombre) && preg_match($regla, $apellido) && is_numeric($edad) && preg_match("/^[a-zA-Záéíóúü\s0-9.,°-]+$/", $direccion)){
            $respuesta="<h2>Hola, yo soy $nombre, $apellido tengo $edad años y vivo en $direccion.<br>";
            if($edad>18){
                $respuesta.= "Soy mayor de edad.</h2>";
            }
            else{$respuesta.="Soy menor de edad.</h2>";}
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