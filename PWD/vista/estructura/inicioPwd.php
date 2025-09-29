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
                <li>Federico Amigone</li>
            </ul>
            <div class="carpetas">
                <h3>Acceso a trabajos prácticos</h3>
                <div class="imagen"><a href="../tp1/tp1Inicio.php"><img src="../img/carpeta.png" alt="Imagen de carpeta"><h4>TP1</h4></a></div>
                <div class="imagen"><a href="mantenimiento.php"><img src="../img/carpeta.png" alt="Imagen de carpeta"><h4>TP2</h4></a></div>
                <div class="imagen"><a href="mantenimiento.php"><img src="../img/carpeta.png" alt="Imagen de carpeta"><h4>TP3</h4></a></div>
                <div class="imagen"><a href="../tp4/tp4Inicio.php"><img src="../img/carpeta.png" alt="Imagen de carpeta"><h4>TP4</h4></a></div>
            </div> 
        </div>    
    </main>

    <!-- Incluye footer -->
<?php
    include_once('footer.php')
?>