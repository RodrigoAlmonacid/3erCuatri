<!-- Inluye el header -->
<?php
    $title = "Actualizar persona";
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
            <h1>Buscar persona</h1>
                <form class="formulario" action="accionBuscarPersona.php" method="post">
                    <label for="dni">Ingrese DNI:
                        <input type="number" placeholder="11222333" min="0" max="99999999" name="dni" id="dni" required>
                        <div id="errorDni"></div>
                    </label>
                    <div>
                        <input type="submit" value="Buscar">
                        <a href="../tp4Inicio.php"><input type="button" value="Volver"></a>
                    </div>
                </form>
                <script src="../../JS/dni.js"></script>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 