<?php
    function horasCursada($datos){
        if(isset($datos['cantDias'])){
            $cantDias=$datos['cantDias'];
            $arregloDias=[];
            $sumaHora=0;
            $sumaMin=0;
            for($i=0; $i<$cantDias; $i++){
                $hora=$datos["hora$i"];
                $minuto=$datos["minuto$i"];
                $arregloDias["dia$i"]=$hora.":".$minuto;
                $sumaHora=$sumaHora+$hora;
                $sumaMin=$sumaMin+$minuto;
            }
            $sumaHora=$sumaHora+intval($sumaMin/60);
            $sumaMin=$sumaMin-60*intval($sumaMin/60);
            $respuesta="<h3>Cursa {$cantDias} días en la semana, lo que suma {$sumaHora} horas y {$sumaMin} minutos.<h3>";
        }
        else{
            $respuesta="Error, no pudieron procesarse datos.<br>";
        }
        return $respuesta;
    }
?>
