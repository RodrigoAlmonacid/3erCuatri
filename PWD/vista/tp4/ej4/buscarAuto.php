<!-- Inluye el header -->
<?php
    $title = "Buscar Auto";
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
            <h1>Buscar auto por patente</h1>
            <div class="group-row">
                <img id="patente" src="../../img/patente.jpg" alt="Auto">
                <form class="formulario" action="accionBuscarAuto.php" method="get">
                    <label for="dominio">Ingrese patente:
                        <input type="text" placeholder="AAA 123" minlength="6" maxlength="7" name="dominio" id="dominio" required>
                    </label>
                    <input type="submit" value="Consultar">
                </form>
            </div>
        </div>
        <script src="../../JS/patente.js"></script>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 