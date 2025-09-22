<!-- Inluye el header -->
<?php
    $title = "Listado";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../control/tp4/ej5VerPersonas.php');
    $arregloPersonas=verPersonas();
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
                    $cantidad=count($arregloPersonas);
                    if($cantidad>0){
                        $i=0;
                        ?>
                        <h1>Hemos encontrado <?=$cantidad?> personas.</h1>
                        <h2>Listado:</h2>
                        <?php
                        foreach($arregloPersonas as $unaPersona){
                            $i++;
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
                                <h3>Persona Nº: <?=$i?></h3>
                                <ul>
                                    <li>Nombre: <?=$nombre?></li>
                                    <li>Apellido: <?=$apellido?></li>
                                    <li>Dni N°: <?=$dni?></li>
                                    <li>Fecha de nacimiento: <?=$dia?>/<?=$mes?>/<?=$anio?></li>
                                    <li>Telefono: <?=$telefono?></li>
                                    <li>Domicilio: <?=$domicilio?></li>
                                </ul>
                            <?php
                        }
                    }
                    else{echo "No se encontraron registros.";}
                ?> 
                <a href="listaPersonas.php"><input type="button" value="Volver"></a>
            </div>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 