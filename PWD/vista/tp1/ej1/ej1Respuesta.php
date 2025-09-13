<!-- Inluye el header -->
<?php
    $title = "Ejercicio 1";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
 <?php
include_once '../../../control/tp1/ej1VerNumero.php';
?>
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <h1>Respuesta</h1>
            <?php 
            echo verNumero();
            ?>
            <a href="ej1Index.php"><input type="button" value="Volver"></a>
        </div>    
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?>
