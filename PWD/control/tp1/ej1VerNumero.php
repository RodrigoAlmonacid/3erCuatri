<?php
    function verNumero($datosForm){
        $error="";
        $respuesta=[];
        $dato="";
        if (isset($datosForm['numForm'])){ 
            $numero = trim($datosForm['numForm']);
            if($numero != "" && is_numeric($numero)){
                if($numero<0){
                    $dato="menor";
                }
                elseif($numero>0){
                    $dato="mayor";
                }
                else{
                    $dato="cero";
                }
            }
            else{
                $error="No se ha ingresado un valor numérico";
            }
        }
        else{
            $error="No se recibieron datos";
        }
        $respuesta=[
            "dato"=>$dato,
            "error"=>$error
        ];
        return $respuesta;
}
?>  