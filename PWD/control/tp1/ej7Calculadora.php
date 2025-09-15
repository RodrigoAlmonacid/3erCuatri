<?php
    function calculadora($datos){
        if (isset($datos['num1']) && isset($datos['num2'])){ 
            $num1=trim($datos['num1']);
            $num2=trim($datos['num2']);
            $operacion=$datos['operacion'];
            if(is_numeric($num1) && is_numeric($num2)){
                $cadena="<h2>Resultado de la ";
                if($operacion=="sum"){
                    $cadena.="suma:</h2>";
                    $operacion=" + ";
                    $resultado=$num1+$num2;
                } 
                elseif($operacion=="mult"){
                    $cadena.="multiplicación:</h2>";
                    $operacion=" x ";
                    $resultado=$num1*$num2;
                }
                elseif($operacion=="div"){
                    $cadena.="división:</h2>";
                    $operacion=" &divide; ";
                    if($num2!=0){
                        $resultado=$num1/$num2;
                    }
                    else{
                        $resultado="No está definida la división por cero";
                    }
                }
                else{
                    $cadena.="resta:</h2>";
                    $operacion=" - ";
                    $resultado=$num1-$num2;
                }
                $cadena.="<h2>".$num1.$operacion.$num2." = ".$resultado.".</h2>";
            }
            else{
                $cadena="<h2>Debe ingresar valores numéricos.</h2>";
            }
            }
        else{
            $cadena="<h2>No se recibieron datos.</h2>";
        }
    return $cadena;
}
?> 