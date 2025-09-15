<?php
    function verNumero($datosForm){
        if (isset($datosForm['numForm'])){ 
            $numero = trim($datosForm['numForm']);
            if($datosForm['numForm'] != "" && is_numeric($numero)){
                $cadena="<h2>El valor ingresado es ";
                if($numero<0){
                    $cadena.="un número negativo.</h2><br/>";
                }
                elseif($numero>0){
                    $cadena.="un número positivo.</h2><br/>";
                }
                else{
                    $cadena.="cero.</h2><br/>";
                }
            }
            else{
                $cadena="<h2>Usted no ha ingresado un valor numérico.</h2><br/>";
            }
        }
        else{
            $cadena="<h2>No se recibieron datos</h2><br/>";
        }
        return $cadena;
}
?>  