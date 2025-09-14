<?php
function muestraDatos($datos){
    if(!empty($datos['nombre']) && !empty($datos['apellido']) && !empty($datos['edad']) && !empty($datos['direccion']) && !empty($datos['estudios']) && !empty($datos['sexo'])){
        $nombre=trim($datos['nombre']);
        $apellido=trim($datos['apellido']);
        $edad=trim($datos['edad']);
        $direccion=trim($datos['direccion']);
        $regla="/^[a-zA-Záéíóúü\s]+$/";//regla de caracteres admitidos
        $estudios=$datos['estudios'];
        $sexo=$datos['sexo'];
        $deporte=$datos['deporte'];
        if(preg_match($regla, $nombre) && preg_match($regla, $apellido) && is_numeric($edad) && preg_match("/^[a-zA-Záéíóúü\s0-9.,°-]+$/", $direccion)){
            $respuesta="<h2>Hola, yo soy $nombre, $apellido tengo $edad años y vivo en $direccion.<br>";
            if($edad>18){
                $respuesta.= "Soy mayor de edad.<br>";
            }
            else{$respuesta.="Soy menor de edad.<br>";}
            $respuesta.="Mis estudios: ";
            if($estudios=='sin'){
                $respuesta.="no tiene estudios.<br>";
            }
            elseif($estudios=='prim'){
                $respuesta.="estudios primarios.<br>";
            }
            elseif($estudios='sec'){
                $respuesta.="estudios secundarios.<br>";
            }
            else{
                $respuesta.="estudios terciarios.<br>";
            }
            $respuesta.="Sexo: ";
            if($sexo=='m'){
                $respuesta.="masculino.<br>";
            }
            elseif($sexo=='f'){
                $respuesta.="femenino.<br>";
            }
            else{
                $respuesta.="otro.<br>";
            }
            $respuesta.="Deportes:<br><ul>";
            $dep=0;
            foreach($deporte as $unDep){
                if($unDep=='fut'){
                    $respuesta.="<li>Futbol</li>";
                    $dep++;
                }
                elseif($unDep=='bas'){
                    $respuesta.="<li>Basquet</li>";
                    $dep++;
                }
                elseif($unDep=='ten'){
                    $respuesta.="<li>Tennis</li>";
                    $dep++;
                }
                elseif($unDep=='vol'){
                    $respuesta.="<li>Voley</li>";
                    $dep++;
                }
                else{
                    $respuesta.="<li>No practica deportes</li>";
                }
            }
            $respuesta.="</ul><br>Usted practica {$dep} deportes.</h2>";
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