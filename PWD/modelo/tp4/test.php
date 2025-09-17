<?php
include_once('Persona.php');
$objPersona=new Persona();
/* Test buscar()
$busca=$objPersona->buscar(22985265);
if($busca){
    echo "Ecuentra\n";
    echo $objPersona;
}
else{echo "Nop.\n";}
*/
/* Test listar() 
$listar=$objPersona->listar();
$i=0;
foreach($listar as $persona){
    $i++;
    echo "Persona: ".$i."\n".$persona."\n";
}
*/
/* Test insertar()
$cargar=$objPersona->cargar('Rodrigo', 'Almonacid', '2945-410101', '1988-12-29', '33773024', 'Noerdestrom 1291'); 
$insertar=$objPersona->insertar();
if($insertar){
    echo "Persona cargada con éxito.\n";
}
else{echo "Nop.\n";}
*/
/* Test modificar() */
$buscar=$objPersona->buscar(33773024);
echo "Persona encontrada:\n".$objPersona."\n";
$setNombre=$objPersona->setNombre('Rodrigo'); //modifico el nombre al objeto
$modificar=$objPersona->modificar(); //modifico el nombre en la base
if($modificar){
    echo "Persona modificada.\n";
    echo $objPersona."\n";
}
else{echo "Nop.\n";}
?>