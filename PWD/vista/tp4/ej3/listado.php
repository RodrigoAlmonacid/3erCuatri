<!-- Inluye el header -->
<?php
    $title = "Listado";
    include_once('../../estructura/head.php');
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../control/tp4/controlAuto.php');
    $arregloAutos=verAutos();
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
                    $cantidad=count($arregloAutos);
                    if($cantidad>0){
                        $i=0;
                        ?>
                        <h1>Hemos encontrado <?=$cantidad?> vehiculos.</h1>
                        <h2>Listado:</h2>
                        <div class="flechas">
                            <a href="#top" class="boton-subir arriba" aria-label="Ir arriba">&uarr;</a>
                            <a href="#bottom" class="boton-subir abajo" aria-label="Ir abajo">&darr;</a>
                        </div>
                        <?php
                        $arreglo=[];
                        foreach($arregloAutos as $unAuto){
                            $i++;
                            $modelo=$unAuto->getModelo();
                            $marca=$unAuto->getMarca();
                            $patente=$unAuto->getPatente();
                            $objPersona=$unAuto->getObjPersona();
                            $nombre=$objPersona->getNombre();
                            $apellido=$objPersona->getApellido();
                            $autoExport=[
                                'modelo'=>$modelo,
                                'marca'=>$marca,
                                'patente'=>$patente,
                                'duenio'=>$nombre." ".$apellido,
                                'dniDuenio'=>$objPersona->getNroDni()
                            ];
                            array_push($arreglo, $autoExport);
                            ?>
                                <h3>Vehiculo Nº: <?=$i?></h3>
                                <ul>
                                    <li>Patente: <?=$patente?></li>
                                    <li>Marca: <?=$marca?></li>
                                    <li>Modelo: <?=$modelo?></li>
                                    <li>Su dueño es: <?=$nombre?> <?=$apellido?></li>
                                </ul>
                            <?php
                            $arregloExport=[
                                'tipo'=>'autos',
                                'listado'=>$arreglo
                            ];
                            $_SESSION['arregloExport']=$arregloExport;
                        }
                    }
                    else{echo "No se encontraron registros.";}
                ?> 
                <div class="botonesExtra">
                    <a href="VerAutos.php"><input type="button" value="Volver"></a>
                    <a href="../../../helpers/exportaExcel.php"><input type="button" value="Exportar"></a>
                </div>
            </div>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 