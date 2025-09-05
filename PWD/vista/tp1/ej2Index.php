<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 2</title>
    <link rel="stylesheet" href="../CSS/general.css">
</head>
<body>
    <div class="contenedor">
        <h1>Programación Web Dinámica</h1>
        <form class="formulario" action="ej2Resultado.php" method="get">
            <label for="cantDias">¿cuántos días a la semana cursa?</label>
            <input type="number" min="1" max="7" name="cantDias" id="dias" required>
            <button type="button" id="bttDias">Aceptar</button>
            <div style="display:none;" id="divDias">

            </div>
            <input type="submit" value="Enviar" id="bttEnviar" style="display:none;">
        </form>
    </div>
    <script src="../JS/ej2.js"></script>
</body>
</html>