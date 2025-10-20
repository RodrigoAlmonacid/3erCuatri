<!-- Inluye el header -->
<?php
    $title = "Buscar Auto";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../helpers/tipoAction.php');
    $datosForm=getSubmittedData();
    include_once('../../../control/tp4/controlAuto.php');
    $resultado=consultaPatente($datosForm['dominio']);                   
?>
</head>
<body>
    <main>
        <div class="contenedor">
            <div class="pantalla-texto">
                <?php
                    if($resultado['encuentra']){
                        $modelo=$resultado['objeto']->getModelo();
                        $marca=$resultado['objeto']->getMarca();
                        $patente=$resultado['objeto']->getPatente();
                        $objPersona=$resultado['objeto']->getObjPersona();
                        $nombre=$objPersona->getNombre();
                        $apellido=$objPersona->getApellido();
                        ?>
                        <h1>Vehiculo encontrado:</h1> 
                        <ul>
                            <li>Patente: <?=$patente?></li>
                            <li>Marca: <?=$marca?></li>
                            <li>Modelo: <?=$modelo?></li>
                            <li>Su dueño es: <?=$nombre?> <?=$apellido?></li>
                        </ul>
                    <?php
                    }
                    else{
                        ?>
                        <h1><?=$resultado['error']?></h1>
                    <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>