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
                        <?php
                        $arregloExport=[];
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
                            array_push($arregloExport, $autoExport);
                            ?>
                                <h3>Vehiculo Nº: <?=$i?></h3>
                                <ul>
                                    <li>Patente: <?=$patente?></li>
                                    <li>Marca: <?=$marca?></li>
                                    <li>Modelo: <?=$modelo?></li>
                                    <li>Su dueño es: <?=$nombre?> <?=$apellido?></li>
                                </ul>
                            <?php
                            $_SESSION['arregloExport']=$arregloExport;
                        }
                    }
                    else{echo "No se encontraron registros.";}
                ?> 
                <a href="pruebaExcel.php"><input type="button" value="Exportar"></a>
                <a href="VerAutos.php"><input type="button" value="Volver"></a>
            </div>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 