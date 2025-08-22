<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>
<body>
    <?php
        if ($_POST && $_POST['numForm'] != ""){
            $numero = trim($_POST['numForm']);
            echo "<h1>Respuesta:</h1><br/>";
            $cadena="<h2>El valor ingresado es ";
            if(is_numeric($numero)){
                if($numero<0){
                    $cadena.="un número negativo.</h2><br/>";
                }
                elseif($numero>0){
                    $cadena.="un número positivo.</h2><br/>";
                }
                else{
                    $cadena.="cero.</h2><br/>";
                }
                echo $cadena;
            }
            else{
                echo "<h2>Usted no ha ingresado un valor numérico.</h2><br/>";
            }
        }
        else{
            echo "<h2>No se recibieron datos</h2><br/>";
        }
        echo '<a href="ejercicio1.php"><input type="button" value="Volver"></a>';
?>    
</body>
</html>
