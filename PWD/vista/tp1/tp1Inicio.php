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
                <h3>Acceso a ejercicios</h3>
                <div class="imagen"><a href="ej1/ej1Index.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ejercicio 1</h4></a></div>
                <div class="imagen"><a href="ej2/ej2Index.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ejercicio 2</h4></a></div>
                <div class="imagen"><a href="ej3/ej3Index.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ejercicio 3</h4></a></div>
                <div class="imagen"><a href="ej4/ej4Index.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ejercicio 4</h4></a></div>
                <div class="imagen"><a href="ej5/ej5Index.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ejercicio 5</h4></a></div>
                <div class="imagen"><a href="ej6/ej6Index.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ejercicio 6</h4></a></div>
                <div class="imagen"><a href="ej7/ej7Index.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ejercicio 7</h4></a></div>
                <div class="imagen"><a href="ej8/ej8Index.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ejercicio 8</h4></a></div>
                <a href="../estructura/inicioPwd.php"><input type="button" value="Volver"></a>
            </div> 
        </div>    
    </main>
<!-- Incluye footer -->
<?php
    include_once('../estructura/footer.php')
?>