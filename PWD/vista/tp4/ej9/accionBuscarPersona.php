<!-- Inluye el header -->
<?php
    $title = "Modificar persona";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
 <?php
    include_once('../../../helpers/tipoAction.php');
    $datosForm=getSubmittedData();
    include_once('../../../control/tp4/controlPersona.php');
    $busca=buscarPersona($datosForm['dni']);
    $existe=$busca['encuentra'];
    $persona=$busca['persona'];
    $error=$busca['error'];
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
                if($existe){ 
                    $nombre=$persona->getNombre();
                    $apellido=$persona->getApellido();
                    $dni=$persona->getNroDni();
                    $nacimiento=$persona->getFechaNac();
                    $telefono=$persona->getTelefono();
                    $domicilio=$persona->getDomicilio();
                    $anio=substr($nacimiento, 0, 4);
                    $mes=substr($nacimiento, 5, 2);
                    $dia=substr($nacimiento, 8, 2);
                    ?>
                    <h2>Datos de la persona que va a editar:</h2>
                    <ul>
                        <li>Nombre: <?=$nombre?></li>
                        <li>Apellido: <?=$apellido?></li>
                        <li>Dni N°: <?=$dni?></li>
                        <li>Fecha de nacimiento: <?=$dia?>/<?=$mes?>/<?=$anio?></li>
                        <li>Telefono: <?=$telefono?></li>
                        <li>Domicilio: <?=$domicilio?></li>
                    </ul>
                    <div class="group-row">
                        <form class="formulario" action="atualizarDatosPersona.php" method="post">
                            <input type="hidden" name="dni" value="<?=$datosForm['dni']?>">
                            <label for="info">Complete solo los campos que desea modificar:</label>
                            <div class="divDatos">
                                <div class="pares">
                                    <label for="nombre">Nombre:
                                        <input type="text" name="nombre" placeholder="<?=$nombre?>" id="nombre">
                                    </label>
                                    <label for="apellido">Apellido:
                                        <input type="text" name="apellido" placeholder="<?=$apellido?>" id="apellido">
                                    </label>
                                </div>
                                <div class="pares">
                                    <label for="telefono">Telefono:
                                        <input type="text" name="telefono" placeholder="<?=$telefono?>" id="telefono">
                                    </label>
                                    <label for="fechaNac">Fecha de nacimiento:
                                        <input type="date" name="fechaNac" value="<?=$anio?>-<?=$mes?>-<?=$dia?>" id="fechaNac">
                                    </label>
                                </div>
                                <div class="pares">
                                    <label for="domicilio">Domicilio:
                                        <input type="text" name="domicilio" placeholder="<?=$domicilio?>" id="domicilio">
                                    </label>
                                    <div>
                                        <input type="submit" value="Editar">
                                        <a href="buscarPersona.php"><input type="button" value="Volver"></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            <?php } 
                else{
                    ?>
                    <h2>La persona no existe en la base de datos.</h2>
                    <div>
                        <a href="buscarPersona.php"><input type="button" value="Volver"></a>
                        <a href="../ej6/nuevaPersona.php"><input type="button" value="Crear persona"></a>
                    </div>
            <?php } ?>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 