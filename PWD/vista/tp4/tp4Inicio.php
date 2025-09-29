<!-- Inluye el header -->
<?php
    $title = "TP4";
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
            <h2>Trabajo práctico número 4</h2>
            <h3>Ejercicios:</h3>
            <div class="ejercicios">
                <div class="imagen"><a href="ej3/VerAutos.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ver Autos</h4></a></div>
                <div class="imagen"><a href="ej4/buscarAuto.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Buscar Auto</h4></a></div>
                <div class="imagen"><a href="ej5/listaPersonas.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Ver Personas</h4></a></div>
                <div class="imagen"><a href="ej6/nuevaPersona.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Crear Persona</h4></a></div>
                <div class="imagen"><a href="ej7/nuevoAuto.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Crear Auto</h4></a></div>
                <div class="imagen"><a href="ej8/cambioDuenio.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Transferencia de Auto</h4></a></div>
                <div class="imagen"><a href="ej9/buscarPersona.php"><img src="../img/imgPhp.png" alt="Imagen de php"><h4>Editar persona</h4></a></div>
                <a href="../estructura/inicioPwd.php"><input type="button" value="Volver"></a>
            </div> 
        </div>    
    </main>
<!-- Incluye footer -->
<?php
    include_once('../estructura/footer.php')
?>