<!-- Inluye el header -->
<?php
    $title = "TP1";
    include_once('../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once ('../estructura/menu.php')
    ?>
    <main>
        <div class="contenedor">
            <h2>Trabajo práctico número 1</h2>
            <h3>Ejercicios:</h3>
            <div class="ejercicios">
                <h3>Acceso a trabajos prácticos</h3>
                <div class="imagen"><a href="ej1/ej1Index.php"><img src="../img/imgPhp.png" alt="Imagen de carpeta"><h4>Ejercicio 1</h4></a></div>
                <div class="imagen"><a href="ej2/ej2Index.php"><img src="../img/imgPhp.png" alt="Imagen de carpeta"><h4>Ejercicio 2</h4></a></div>
                <div class="imagen"><a href="ej3/ej3Index.php"><img src="../img/imgPhp.png" alt="Imagen de carpeta"><h4>Ejercicio 3</h4></a></div>
                <div class="imagen"><a href="ej4/ej4Index.php"><img src="../img/imgPhp.png" alt="Imagen de carpeta"><h4>Ejercicio 4</h4></a></div>
                <div class="imagen"><a href="ej5/ej5Index.php"><img src="../img/imgPhp.png" alt="Imagen de carpeta"><h4>Ejercicio 5</h4></a></div>
                <div class="imagen"><a href="ej6/ej6Index.php"><img src="../img/imgPhp.png" alt="Imagen de carpeta"><h4>Ejercicio 6</h4></a></div>
            </div> 
        </div>    
    </main>
<!-- Incluye footer -->
<?php
    include_once('../estructura/footer.php')
?>