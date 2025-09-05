<?php
include_once '../../control/tp1/ej1VerNumero.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
    <link rel="stylesheet" href="../CSS/general.css">
</head>
<body>
    <div class="contenedor">
        <h1>Respuesta</h1>
        <?php 
        echo verNumero();
        ?>
        <a href="ej1Index.php"><input type="button" value="Volver"></a>
    </div>    
</body>
</html>
