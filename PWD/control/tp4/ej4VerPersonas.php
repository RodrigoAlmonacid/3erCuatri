<?php
    include_once(__DIR__.'/../../modelo/tp4/Auto.php');
    include_once(__DIR__.'/../../modelo/tp4/Persona.php');
    $objPersona=new Persona();
    $arregloPersonas=$objPersona->listar();
?>