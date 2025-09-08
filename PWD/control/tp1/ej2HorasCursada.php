<?php
    function horasCursada(){
        if(isset($_GET['cantDias'])){
            $cantDias=$_GET['cantDias'];
            $arregloDias=[];
            $sumaHora=0;
            $sumaMin=0;
            for($i=0; $i<$cantDias; $i++){
                $hora=$_GET["hora$i"];
                $minuto=$_GET["minuto$i"];
                $arregloDias["dia$i"]=$hora.":".$minuto;
                $sumaHora=$sumaHora+$hora;
                $sumaMin=$sumaMin+$minuto;
            }
            $sumaHora=$sumaHora+intval($sumaMin/60);
            $sumaMin=$sumaMin-60*intval($sumaMin/60);
            $respuesta="<h3>Cursa {$cantDias} días en la semana, lo que suma {$sumaHora} horas y {$sumaMin} minutos<h3>";
        }
        else{
            $respuesta="Error, no pudieron procesarse datos.<br>";
        }
        return $respuesta;
    }
?>
