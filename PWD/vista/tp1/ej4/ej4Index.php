<!-- Inluye el header -->
<?php
    $title = "Ejercicio 4";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <form action="ej4Resultado.php" class="formulario" method="get">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" maxlength="30" id="nombre" required>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" maxlength="30" id="apellido" required>
                <label for="edad">Edad</label>
                <input type="number" name="edad" min="1" max="99" id="edad" required>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" maxlength="100" id="direccion" required>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 