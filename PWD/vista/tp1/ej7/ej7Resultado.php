<!-- Inluye el header -->
<?php
    $title = "Ejercicio 7";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
include_once('../../../helpers/tipoAction.php');
$datosForm=getSubmittedData();
include_once('../../../control/tp1/ej7Calculadora.php');
$cadena=calculadora($datosForm);
?>
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <?=$cadena?>
            <a href="ej7Index.php"><input type="button" value="Volver"></a>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 