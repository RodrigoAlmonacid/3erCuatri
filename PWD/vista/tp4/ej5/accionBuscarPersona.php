<!-- Inluye el header -->
<?php
    $title = "Persona";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../helpers/tipoAction.php');
    $datosForm=getSubmittedData();
    include_once('../../../control/tp4/ej5VerPersonas.php');
    $resultado=buscarPersona($datosForm['dni']);
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
                    $encuentra=$resultado['encuentra'];
                    $error=$resultado['error'];
                    $arregloAutos=$resultado['arreglo'];
                    $unaPersona=$resultado['persona'];
                    $cantidad=count($arregloAutos);
                    $nombre=$unaPersona->getNombre();
                    $apellido=$unaPersona->getApellido();
                    $dni=$unaPersona->getNroDni();
                    $nacimiento=$unaPersona->getFechaNac();
                    $telefono=$unaPersona->getTelefono();
                    $domicilio=$unaPersona->getDomicilio();
                    $anio=substr($nacimiento, 0, 4);
                    $mes=substr($nacimiento, 5, 2);
                    $dia=substr($nacimiento, 8, 2);
                    ?>
                    <h2>Persona encontrada:</h2>
                    <ul>
                        <li>Nombre: <?=$nombre?></li>
                        <li>Apellido: <?=$apellido?></li>
                        <li>Dni N°: <?=$dni?></li>
                        <li>Fecha de nacimiento: <?=$dia?>/<?=$mes?>/<?=$anio?></li>
                        <li>Telefono: <?=$telefono?></li>
                        <li>Domicilio: <?=$domicilio?></li>
                    </ul>
                    <?php 
                    if($cantidad>0){
                        ?>
                        <h2>La persona tiene <?=$cantidad?> autos</h2>
                        <h2>Listado:</h2>
                        <?php
                        for($i=0; $i<$cantidad; $i++){
                            ?>
                            <ul>
                                <li>Marca: <?=$arregloAutos[$i]['Marca']?></li>
                                <li>Modelo: <?=$arregloAutos[$i]['Modelo']?></li>
                                <li>Patente: <?=$arregloAutos[$i]['Patente']?></li>
                            </ul>
                            <?php
                        }
                    }
                    else{
                        ?>
                        <h2>No se encontraron autos registrados con el DNI <?=$datosForm['dni']?></h2>
                        <?php    
                    }
                ?> 
                <a href="listaPersonas.php"><input type="button" value="Volver"></a>
            </div>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 