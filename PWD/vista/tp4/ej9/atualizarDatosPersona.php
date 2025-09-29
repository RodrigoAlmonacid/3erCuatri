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
    $actualiza=actualizaPersona($datosForm);
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
                if($actualiza['encuentra']){
                    $objPersona=$actualiza['persona'];
                    $nombre=$objPersona->getNombre();
                    $apellido=$objPersona->getApellido();
                    $telefono=$objPersona->getTelefono();
                    $dni=$objPersona->getNroDni();
                    $domicilio=$objPersona->getDomicilio();
                    $nacimiento=$objPersona->getFechaNac();
                    $anio=substr($nacimiento, 0, 4);
                    $mes=substr($nacimiento, 5, 2);
                    $dia=substr($nacimiento, 8, 2);
                    ?>
                        <h2>Persona actualizada con éxito</h2>
                        <h3>Nuevos datos:</h3>
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
            ?>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 