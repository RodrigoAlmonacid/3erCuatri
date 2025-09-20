<!-- Inluye el header -->
<?php
    $title = "Ver Personas";
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
            <h1>Base de datos de personas</h1>
            <img id="persona" src="../../img/persona.png" alt="Auto">
            <a href="listado.php"><input type="button" value="Consultar"></a>
            </form>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 