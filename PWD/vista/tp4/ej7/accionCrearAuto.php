<!-- Inluye el header -->
<?php
    $title = "Crear Auto";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../helpers/tipoAction.php');
    $datosForm=getSubmittedData();
    include_once('../../../control/tp4/controlAuto.php');
    $resultado=insertarAuto($datosForm);
?>
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <div class="pantalla-texto">
                <?php
                    if($resultado['inserta']){
                        ?>
                        <h2>Auto agregado con éxito.</h2>
                        <?php
                    }
                    else{
                        ?>
                        <h2><?=$resultado['error']?>.</h2>
                        <?php
                    } ?>
                <a href="nuevoAuto.php"><input type="button" value="Volver"></a>
            </div>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 