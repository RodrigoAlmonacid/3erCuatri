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
            <div class="dos-opciones">
                <div class="op-a">
                    <h2>Listado completo</h2>
                    <img id="persona" src="../../img/persona.png" alt="Auto">
                    <a href="listado.php"><input type="button" value="Consultar"></a>
                </div>
                <div class="op-b">
                    <h2>Buscar persona</h2>
                    <img id="auto-persona" src="../../img/auto-persona.png" alt="Auto-Persona">
                    <a href="autoPersona.php"><input type="button" value="Consultar"></a>
                </div>
            </div>
            <a href="../tp4Inicio.php"><input type="button" value="Volver"></a>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 