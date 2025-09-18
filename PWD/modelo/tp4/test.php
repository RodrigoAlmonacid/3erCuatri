<?php
include_once('Persona.php');
include_once('Auto.php');
//Clase Persona
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
/* Test modificar() 
$buscar=$objPersona->buscar(33773024);
echo "Persona encontrada:\n".$objPersona."\n";
$setNombre=$objPersona->setNombre('Rodrigo'); //modifico el nombre al objeto
$modificar=$objPersona->modificar(); //modifico el nombre en la base
if($modificar){
    echo "Persona modificada.\n";
    echo $objPersona."\n";
}
else{echo "Nop.\n";}
*/
//Clase auto
$objAuto=new Auto();
/* Test buscar() 
$busca=$objAuto->buscar('ADC 152');
if($busca){
    echo "Ecuentra\n";
    echo $objAuto;
}
else{echo "Nop.\n";}
*/
/* Test listar() 
$listar=$objAuto->listar();
$i=0;
foreach($listar as $auto){
    $i++;
    echo "Persona: ".$i."\n".$auto."\n";
}
*/
/* Test insertar() 
$cargar=$objAuto->cargar('ORF 515', 2015, 'Chevrolet classic', '33773024'); 
$insertar=$objAuto->insertar();
if($insertar){
    echo "Vehiculo cargado con éxito.\n";
}
else{echo "Nop.\n";} 
*/
/* Test modificar() */
$buscar=$objAuto->buscar('POL 968');
echo "Vehiculo encontrado:\n".$objAuto."\n";
$setModelo=$objAuto->setModelo(1977); //modifico el nombre al objeto
$modificar=$objAuto->modificar(); //modifico el nombre en la base
if($modificar){
    echo "Vehículo modificado.\n";
    echo $objAuto."\n";
}
else{echo "Nop.\n";}

?>