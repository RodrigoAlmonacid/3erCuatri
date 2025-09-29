<!-- Inluye el header -->
<?php
    $title = "Crear auto";
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
            <h1>Ingresar nuevo auto</h1>
                <form class="formulario" action="preCrearAuto.php" method="post">
                    <label for="dominio">Ingrese patente:
                        <input type="text" placeholder="AAA 123" minlength="6" maxlength="7" name="dominio" id="dominio" required>
                        <div id="error"></div>
                    </label>
                    <label for="dni">Ingrese DNI del titular:
                        <input type="number" placeholder="11222333" min="0" max="99999999" name="dni" id="dni" required>
                        <div id="errorDni"></div>
                    </label>
                    <div>
                        <input type="submit" value="Crear">
                        <a href="../tp4Inicio.php"><input type="button" value="Volver"></a>
                    </div>
                </form>
        </div>
        <script src="../../JS/patente.js"></script>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 