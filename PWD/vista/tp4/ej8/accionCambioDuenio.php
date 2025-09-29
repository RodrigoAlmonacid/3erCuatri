<!-- Inluye el header -->
<?php
    $title = "Transferencia";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
 <?php
    include_once('../../../helpers/tipoAction.php');
    $datosForm=getSubmittedData();
    include_once('../../../control/tp4/controlAuto.php');
    $respuesta=transferir($datosForm);
    $patente=normalizaPatente($datosForm['dominio']);
?>
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <?php
                $modifica=$respuesta['modifica'];
                $objAuto=$respuesta['objAuto'];
                $encuentraAuto=$respuesta['encuentraAuto'];
                $encuentraPersona=$respuesta['encuentraPersona'];
                $error=$respuesta['error'];
                if($modifica){
                    ?>
                        <h2>Cambio de titularidad realizado con exito.</h2>
                    <?php
                }
                else{
                    if(!$encuentraAuto){
                        ?>
                        <h2>Error</h2>
                        <p>No hemos podido encontrar la patente <?=$patente?></p>
                        <?php
                    }
                    if(!$encuentraPersona){
                        ?>
                        <h2>Error</h2>
                        <p>No hemos podido encontrar la persona con dni <?=$datosForm['dni']?></p>
                        <?php
                    }
                    if($error!=""){
                        ?>
                        <h2>Error</h2>
                        <p><?=$error?></p>
                        <?php
                    }
                }
            ?>
            <a href="cambioDuenio.php"><input type="button" value="Volver"></a>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 