<!-- Inluye el header -->
<?php
    $title = "Error";
    include_once('head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once ('menu.php')
    ?>
    <!-- contenido -->

    <main>
        <div class="contenedor">
            <h2>Estamos en tareas de mantenimiento, sepa disculpar las molestias...</h2>
            <img src="../img/mono-platillos.gif" alt="gif-mono-platillos">
            <a href="inicioPwd.php"><input type="button" value="Volver al Inicio"></a>
        </div>    
    </main>

    <!-- Incluye footer -->
<?php
    include_once('footer.php')
?>