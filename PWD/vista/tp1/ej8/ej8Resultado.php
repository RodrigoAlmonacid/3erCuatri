<!-- Inluye el header -->
<?php
    $title = "Ejercicio 8";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
include_once('../../../helpers/tipoAction.php');
$datosForm=getSubmittedData();
include_once('../../../control/tp1/ej8Cine.php');
$precio=valorEntrada($datosForm);
?>
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <h2>Resultado del Cálculo de sus entradas:</h2>
            <h3>Su edad es de <?=$datosForm['edad']?> años.</h3>
            <h3>Usted <?php if($datosForm['estudia']==0){echo "no ";}?>es estudiante.</h3>
            <h3>Por lo tanto, el valor de su entrada es de $<?=$precio?>.</h3>   
            <a href="ej8Index.php"><input type="button" value="Volver"></a>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 
