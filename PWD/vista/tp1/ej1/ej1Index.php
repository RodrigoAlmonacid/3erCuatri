<!-- Inluye el header -->
<?php
    $title = "Ejercicio 1";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <div class="contenedor">
        <form class="formulario" name="ej1" action="ej1Respuesta.php" method="post">
            <h1>Ingrese un número: </h1><input type="number" name="numForm" id="numForm" required><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>