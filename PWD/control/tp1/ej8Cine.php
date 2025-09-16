<?php
function valorEntrada($datos){
    $edad=$datos['edad'];
    $estudia=$datos['estudia'];
    if($estudia=='1'){
        $estudia=true;
    }
    else{$estudia=false;}
    if(isset($edad) && isset($estudia)){
        if($estudia=='1'){
            $estudia=true;
        }
        else{$estudia=false;}
        $edad=trim($edad);
        if((is_numeric($edad) && $edad<12 && 0<$edad) || $estudia){
            $precio=160;
        }
        elseif((is_numeric($edad) && $edad>=12) && $estudia){
            $precio=180;
        }
        else{$precio=300;}
    }
    return $precio;
}
?>