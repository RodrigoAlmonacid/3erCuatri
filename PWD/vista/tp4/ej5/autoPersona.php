<!-- Inluye el header -->
<?php
    $title = "Buscar Persona";
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
            <h1>Buscar persona por DNI</h1>
            <div class="group-row">
                <img id="patente" src="../../img/dni.png" alt="DNI">
                <form class="formulario" action="accionBuscarPersona.php" method="get">
                    <label for="dni">Ingrese DNI:
                        <input type="number" placeholder="11222333" maxlength="9" name="dni" id="dni" required>
                        <div id="error"></div>
                    </label>
                    <div>
                    <input type="submit" value="Consultar">
                    <a href="listaPersonas.php"><input type="button" value="Volver"></a>
                    </div>
                </form>
            </div>
        </div>
        <script src="../../JS/dni.js"></script>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 