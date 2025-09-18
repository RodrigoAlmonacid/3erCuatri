<?php
    include_once(__DIR__.'/../../modelo/tp4/Auto.php');
    include_once(__DIR__.'/../../modelo/tp4/Persona.php');
    $objAuto=new Auto();
    $arregloAutos=$objAuto->listar();
?>