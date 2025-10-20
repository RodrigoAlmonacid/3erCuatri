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
    // Obtener el nombre del host (dominio)
    // Si la cabecera X-Forwarded-Host existe (enviada por ngrok), la usa
    // Si no, usa la cabecera HTTP_HOST normal.
    $host = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST'];
    // Determinar el protocolo (http o https)
    // Si la cabecera X-Forwarded-Proto existe, la usa
    // Si no, revisa la variable HTTPS como antes.
    $protocol = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http");                    
    // Obtener el resto de la URL (esto no cambia)
    $uri = $_SERVER['REQUEST_URI'];
    $vistaActual="accionBuscarAuto.php";
    $vistaQR="accionBuscarAutoQR.php";
    $uri=str_replace($vistaActual, $vistaQR, $uri);
    // Unir todo para formar la URL completa
    $urlCompleta = $protocol."://".$host.$uri;
    //llamo a la función que me genera el QR
    $qr=generaQR($urlCompleta);
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
                    if($resultado['encuentra']){
                        $modelo=$resultado['objeto']->getModelo();
                        $marca=$resultado['objeto']->getMarca();
                        $patente=$resultado['objeto']->getPatente();
                        $objPersona=$resultado['objeto']->getObjPersona();
                        $nombre=$objPersona->getNombre();
                        $apellido=$objPersona->getApellido();
                        if(!empty($_GET['deQR'])){ ?>
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
                        <h1>Vehiculo encontrado:</h1>
                        
                        <ul>
                            <li>Patente: <?=$patente?></li>
                            <li>Marca: <?=$marca?></li>
                            <li>Modelo: <?=$modelo?></li>
                            <li>Su dueño es: <?=$nombre?> <?=$apellido?></li>
                        </ul>
                            <div id="divQR" style="display: none;">
                                <?php 
                                    if($qr){
                                ?>
                                    <h2>Código QR para esta consulta</h2>
                                    <img src="<?php echo $qr; ?>" alt="Código QR generado" loading="lazy">
                                <?php }
                                    else{ ?>
                                        <p style="color:red">Error al generar el código QR.</p>
                                <?php } ?>
                            </div>
                            <div class="botonesExtra">
                                <a href="buscarAuto.php"><input type="button" value="Volver"></a>
                                <input style="display: flex;" type="button" value="Mostrar QR" id="bttMostrar">
                                <input style="display: none;" type="button" value="Ocultar QR" id="bttOcultar">
                            </div>
                            <?php
                    }   
                    }
                    else{
                        ?>
                        <h1><?=$resultado['error']?></h1>
                        <a href="buscarAuto.php"><input type="button" value="Volver"></a>
                    <?php } ?>
            </div>
        </div>
        <script src="../../JS/mostrarQR.js"></script>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 