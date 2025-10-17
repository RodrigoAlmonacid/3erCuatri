<!-- Inluye el header -->
<?php
    $title = "Listado";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../control/tp4/controlPersona.php');
    $arregloPersonas=verPersonas();
    session_start();
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
                    $arreglo=[];
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
                            $nuevoDato=[
                                'nombre'=>$nombre,
                                'apellido'=>$apellido,
                                'dni'=>$dni,
                                'fechaNac'=>$dia."/".$mes."/".$anio,
                                'telefono'=>$telefono,
                                'domicilio'=>$domicilio
                            ];
                            array_push($arreglo, $nuevoDato);
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
                            $arregloExport=[
                                'tipo'=>'personas',
                                'listado'=>$arreglo
                            ];
                            $_SESSION['arregloExport']=$arregloExport;
                        }
                    }
                    else{echo "No se encontraron registros.";}
                ?> 
                <div class="botonesExtra">
                    <a href="listaPersonas.php"><input type="button" value="Volver"></a>
                    <a href="../../../helpers/exportaExcel.php"><input type="button" value="Exportar"></a>
                </div>
            </div>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 