<?php
//archivo que me permite especificar la ruta dependiendo de dónde estoy trabajando
function ruta(){
    //primero dejo la ruta que uso con xampp en windows en el trabajo
    $ruta="/3erCuatri/PWD";
    //ruta que utilizo en mi notebook, en la cual quedó configurado como raiz PWD, en tonces accedo con /vista, /control, /modelo
    //$ruta="";
    //comento la que no utilice
    return $ruta;
}
?>