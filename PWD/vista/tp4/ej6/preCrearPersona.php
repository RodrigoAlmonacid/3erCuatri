<!-- Inluye el header -->
<?php
    $title = "Crear persona";
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
                if(!$existe){ ?>
                    <h1>Crear persona con DNI <?=$datosForm['dni']?>:</h1>
                    <div class="group-row">
                        <form class="formulario" action="accionCrearPersona.php" method="post">
                            <input type="hidden" name="dni" value="<?=$datosForm['dni']?>">
                            <div class="divDatos">
                                <div class="pares">
                                    <label for="nombre">Nombre:
                                        <input type="text" name="nombre" id="nombre" required>
                                        <div id="errorNombre"></div>
                                    </label>
                                    <label for="apellido">Apellido:
                                        <input type="text" name="apellido" id="apellido" required>
                                        <div id="errorApellido"></div>
                                    </label>
                                </div>
                                <div class="pares">
                                    <label for="telefono">Telefono:
                                        <input type="text" name="telefono" id="telefono" required>
                                        <div id="errorTelefono"></div>
                                    </label>
                                    <label for="fechaNac">Fecha de nacimiento:
                                        <input type="date" name="fechaNac" id="fechaNac" required>
                                        <div id="errorFecha"></div>
                                    </label>
                                </div>
                                <div class="pares">
                                    <label for="domicilio">Domicilio:
                                        <input type="text" name="domicilio" id="domicilio">
                                        <div id="errorDomicilio"></div>
                                    </label>
                                    <input type="submit" value="Crear">
                                </div>
                            </div>
                            <script src="../../JS/datosPersona.js"></script>
                        </form>
                    </div>
            <?php } 
                else{
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
                    <h2>La persona ya existe en la base de datos:</h2>
                    <ul>
                        <li>Nombre: <?=$nombre?></li>
                        <li>Apellido: <?=$apellido?></li>
                        <li>Dni N°: <?=$dni?></li>
                        <li>Fecha de nacimiento: <?=$dia?>/<?=$mes?>/<?=$anio?></li>
                        <li>Telefono: <?=$telefono?></li>
                        <li>Domicilio: <?=$domicilio?></li>
                    </ul>
                    <a href="nuevaPersona.php"><input type="button" value="Volver"></a>
            <?php } ?>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 