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
    $buscaAuto=consultaPatente($datosForm['dominio']);
    $existeAuto=$buscaAuto['encuentra'];
    $objAuto=$buscaAuto['objeto'];
    $errorAuto=$buscaAuto['error'];
    include_once('../../../control/tp4/controlPersona.php');
    $buscaPersona=buscarPersona($datosForm['dni']);
    $existePersona=$buscaPersona['encuentra'];
    $objPersona=$buscaPersona['persona'];
    $nombre=$objPersona->getNombre();
    $apellido=$objPersona->getApellido();
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
                if(!$existeAuto && $existePersona){
                    ?>
                    <h1>Dueño:</h1>
                    <ul>
                        <li>Nombre: <?=$nombre?></li>
                        <li>Apellido: <?=$apellido?></li>
                        <li>DNI: <?=$datosForm['dni']?></li>
                    </ul>
                    <h1>Crear vehiculo con Patente <?=normalizaPatente($datosForm['dominio'])['patente']?>:</h1>
                    <div class="group-row">
                        <form class="formulario" action="accionCrearAuto.php" method="post">
                            <input type="hidden" name="dni" value="<?=$datosForm['dni']?>">
                            <input type="hidden" name="dominio" value="<?=$datosForm['dominio']?>">
                            <div class="divDatos">
                                <div class="pares">
                                    <label for="marca">Marca:
                                        <input type="text" placeholder="Chevrolet Corsa" name="marca" id="marca" required>
                                        <div id="errorMarca"></div>
                                    </label>
                                    <label for="modelo">Modelo:
                                        <input type="text" placeholder="2015 (año)" name="modelo" id="modelo" required>
                                        <div id="errorModelo"></div>
                                    </label>
                                </div>
                                <input type="submit" value="Crear">
                            </div>
                            <script src="../../JS/auto.js"></script>
                        </form>
                    </div>
            <?php } 
                if($existeAuto){
                    $patente=$objAuto->getPatente();
                    $marca=$objAuto->getMarca();
                    $modelo=$objAuto->getModelo();
                    $objPersonaDuenio=$objAuto->getObjPersona();
                    $nombreDuenio=$objPersonaDuenio->getNombre();
                    $apellidoDuenio=$objPersonaDuenio->getApellido();
                    $dniDuenio=$objPersonaDuenio->getNroDni();
                    ?>
                    <h2>El auto ya existe en la base de datos:</h2>
                    <ul>
                        <li>Patente: <?=$patente?></li>
                        <li>Marca: <?=$marca?></li>
                        <li>Modelo: <?=$modelo?></li>
                        <li>Datos del dueño:</li>
                        <li>Nombre: <?=$nombreDuenio?></li>
                        <li>Apellido: <?=$apellidoDuenio?></li>
                        <li>Dni N°: <?=$dniDuenio?></li>
                    </ul>
                    <a href="nuevoAuto.php"><input type="button" value="Volver"></a>
            <?php } 
            if(!$existePersona){
                ?>
                <h2>No existe la persona con DNI: <?=$datosForm['dni']?>.</h2>
                <div>
                <a href="nuevoAuto.php"><input type="button" value="Volver"></a>
                <a href="../ej6/nuevaPersona.php"><input type="button" value="Crear"></a>
                </div>
            <?php } ?>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 