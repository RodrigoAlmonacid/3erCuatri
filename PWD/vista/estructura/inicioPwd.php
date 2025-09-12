<!-- Inluye el header -->
<?php
    $title = "Inicio";
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
            <h2>Bienvenido a Programación Web Dinámica</h2>
            <h3>Docentes: </h3>
            <ul>
                <li>Sanchez, Viviana</li>
                <li>Carrasco Claudia</li>
                <li>Juan Marcos Gonzalez</li>
            </ul> 
        </div>    
    </main>

    <!-- Incluye footer -->
<?php
    include_once('footer.php')
?>