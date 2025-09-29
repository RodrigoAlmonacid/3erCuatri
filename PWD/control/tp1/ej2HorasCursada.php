<?php
    function horasCursada($datos){
        $error="";
        $arregloDias=[];
        $sumaHora=0;
        $sumaMin=0;
        if(isset($datos['cantDias']) && $datos["hora0"] && $datos["minuto0"]){
            $cantDias=$datos['cantDias'];
            for($i=0; $i<$cantDias; $i++){
                $hora=$datos["hora$i"];
                $minuto=$datos["minuto$i"];
                $arregloDias["dia$i"]=$hora.":".$minuto;
                $sumaHora=$sumaHora+$hora;
                $sumaMin=$sumaMin+$minuto;
            }
            $sumaHora=$sumaHora+intval($sumaMin/60);
            $sumaMin=$sumaMin-60*intval($sumaMin/60);
        }
        else{
            $error="No se recibieron datos";
        }
        $respuesta=[
            "cantDias"=>$cantDias,
            "cantHoras"=>$sumaHora,
            "cantMinutos"=>$sumaMin,
            "horaXdia"=>$arregloDias,
            "error"=>$error
        ];
        return $respuesta;
    }
?>
