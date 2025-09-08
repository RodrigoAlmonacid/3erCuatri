<?php
function muestraDatos(){
    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['direccion'])){
        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $edad=trim($_POST['edad']);
        $direccion=trim($_POST['direccion']);
        if($nombre!="" && $apellido!="" && $edad!="" && $direccion!=""){
            $respuesta="<h2>Hola, yo soy $nombre, $apellido tengo $edad años y vivo en $direccion.</h2>";
        }
        else{
            $respuesta="<h2>No se admiten campos vacíos o solo con espacios en el formulario.</h2>";
        }
    }
    else{
        $respuesta="<h2>Ne se recibieron datos</h2>";
    }
    return $respuesta;
}
?>