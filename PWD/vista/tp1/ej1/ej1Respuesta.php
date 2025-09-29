<!-- Inluye el header -->
<?php
    $title = "Ejercicio 1";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../helpers/tipoAction.php');
    $datosForm=getSubmittedData();
    include_once '../../../control/tp1/ej1VerNumero.php';
    $respuesta=verNumero($datosForm);
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
                if($respuesta['dato']!=""){
                    $dato=$respuesta['dato'];
                    ?>
                        <h2>Usted ingresó el valor <?=$datosForm['numForm']?><?php
                    if($dato=="mayor"){
                        ?>
                            que es un número positivo.</h2>
                        <?php
                    }
                    else if($dato=="menor"){
                        ?>
                            que es un número negativo.</h2>
                        <?php
                    }
                }
                else{
                    ?>
                        <h2><?=$respuesta['error']?></h2> 
                    <?php
                }
            ?>
            <div>
                <a href="ej1Index.php"><input type="button" value="Volver"></a>
            </div>
        </div>    
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?>
