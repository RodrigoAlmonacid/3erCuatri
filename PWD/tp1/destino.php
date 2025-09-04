<h1>Procesa</h1>
<?php
if ($_POST){
    $nombre = $_POST['nombre_form'] ;
    $apellido = $_POST['apellido_form'] ;
    $tel = $_POST['tel_form'];
    echo "<h3>Nombre: $nombre </h3><br />";
    echo "Apellido: $apellido <br />";
    echo "Tel&eacute;fono: $tel <br />";
    }else{
    echo "No se recibieron datos<br />";
}
?>