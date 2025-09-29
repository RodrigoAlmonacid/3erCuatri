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
    $buscaAuto=consultaPatente($datosForm['dominio']);
    $existeAuto=$buscaAuto['encuentra'];
    $objAuto=$buscaAuto['objeto'];
    $errorAuto=$buscaAuto['error'];
    include_once('../../../control/tp4/controlPersona.php');
    $buscaPersona=buscarPersona($datosForm['dni']);
    $existePersona=$buscaPersona['encuentra'];
    $objPersona=$buscaPersona['persona'];
    $errorPersona=$buscaPersona['error'];
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
                //Recupero datos de la persona
                $nombrePersona=$objPersona->getNombre();
                $apellidoPersona=$objPersona->getApellido();
                $dniPersona=$objPersona->getNroDni();
                //Recupero los datos del vehículo
                $marca=$objAuto->getMarca();
                $modelo=$objAuto->getModelo();
                $patente=$objAuto->getPatente();
                $objPersonaDuenio=$objAuto->getObjPersona();
                $nombreDuenio=$objPersonaDuenio->getNombre();
                $apellidoDuenio=$objPersonaDuenio->getApellido();
                $dniDuenio=$objPersonaDuenio->getNroDni();
                if($existeAuto && $existePersona){
                    if($dniDuenio != $dniPersona){
                    ?>
                    <h1>Vehículo:</h1>
                    <ul>
                        <li>Marca: <?=$marca?></li>
                        <li>Modelo: <?=$modelo?></li>
                        <li>Patente: <?=$patente?></li>
                    </ul>
                    <h1>Dueño actual:</h1>
                    <ul>
                        <li>Nombre: <?=$nombreDuenio?></li>
                        <li>Apellido: <?=$apellidoDuenio?></li>
                        <li>DNI: <?=$dniDuenio?></li>
                    </ul>
                    <h1>Nuevo dueño:</h1>
                    <ul>
                        <li>Nombre: <?=$nombrePersona?></li>
                        <li>Apellido: <?=$apellidoPersona?></li>
                        <li>DNI: <?=$dniPersona?></li>
                    </ul>
                    <div class="group-row">
                        <form class="formulario" action="accionCambioDuenio.php" method="post">
                            <input type="hidden" name="dni" value="<?=$dniPersona?>">
                            <input type="hidden" name="dominio" value="<?=$patente?>">
                            <div>
                                <input type="submit" value="Transferir">
                                <a href="cambioDuenio.php"><input type="button" value="Volver"></a>
                            </div>
                        </form>
                    </div>
                <?php
                    }
                    else{
                        ?>
                        <h2>La persona ya es dueña de ese auto</h2>
                        <ul>
                            <li>Datos del auto:</li>
                            <li>Patente: <?=$patente?></li>
                            <li>Marca: <?=$marca?></li>
                            <li>Modelo: <?=$modelo?></li>
                            <li>Datos del dueño:</li>
                            <li>Nombre: <?=$nombreDuenio?></li>
                            <li>Apellido: <?=$apellidoDuenio?></li>
                            <li>Dni N°: <?=$dniDuenio?></li>
                        </ul>
                        <a href="cambioDuenio.php"><input type="button" value="Volver"></a>
                        <?php
                    }
                } 
                if(!$existeAuto){
                    ?>
                    <h2>No existe en la base de datos un auto con patente <?=$datosForm['dominio']?></h2>
                    <div>
                        <a href="cambioDuenio.php"><input type="button" value="Volver"></a>
                        <a href="../ej7/nuevoAuto.php"><input type="button" value="Crear auto"></a>
                    </div>
            <?php }
                if(!$existePersona){
                    ?>
                    <h2>No existe la persona con DNI: <?=$datosForm['dni']?>.</h2>
                    <div>
                        <a href="cambioDuenio.php"><input type="button" value="Volver"></a>
                        <a href="../ej6/nuevaPersona.php"><input type="button" value="Crear persona"></a>
                    </div>
            <?php } ?>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 