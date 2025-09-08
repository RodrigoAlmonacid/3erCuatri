<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../../CSS/general.css">
</head>
<body>
    <div class="contenedor">
        <form action="resultado.php" class="formulario" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" maxlength="30" id="nombre">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" maxlength="30" id="apellido">
            <label for="edad">Edad</label>
            <input type="number" name="edad" min="1" max="99" id="edad">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" maxlength="100" id="direccion">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>