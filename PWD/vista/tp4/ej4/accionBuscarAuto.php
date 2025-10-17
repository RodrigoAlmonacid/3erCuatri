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
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <div class="pantalla-texto">
                <?php
                    if($resultado['encuentra']){
                        ?>
                        <h1>Vehiculo encontrado:</h1>
                        <?php
                            $modelo=$resultado['objeto']->getModelo();
                            $marca=$resultado['objeto']->getMarca();
                            $patente=$resultado['objeto']->getPatente();
                            $objPersona=$resultado['objeto']->getObjPersona();
                            $nombre=$objPersona->getNombre();
                            $apellido=$objPersona->getApellido();
                        ?>
                        <ul>
                            <li>Patente: <?=$patente?></li>
                            <li>Marca: <?=$marca?></li>
                            <li>Modelo: <?=$modelo?></li>
                            <li>Su dueño es: <?=$nombre?> <?=$apellido?></li>
                        </ul>

                        <?php

                            // 1. Obtener el nombre del host (dominio)
                            // Si la cabecera X-Forwarded-Host existe (enviada por ngrok), úsala.
                            // Si no, usa la cabecera HTTP_HOST normal.
                            $host = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST'];
                                                
                            // 2. Determinar el protocolo (http o https)
                            // Si la cabecera X-Forwarded-Proto existe, úsala.
                            // Si no, revisa la variable HTTPS como antes.
                            $protocol = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http");
                                                
                            // 3. Obtener el resto de la URL (esto no cambia)
                            $uri = $_SERVER['REQUEST_URI'];
                                                
                            // 4. Unir todo para formar la URL completa y pública
                            $urlCompleta = $protocol . "://" . $host . $uri;
                                                
                            // Ahora $urlCompleta contendrá la URL correcta de ngrok
                            // ej: https://kit-misinterpretable-supermechanically.ngrok-free.dev/vista/tp4/ej4/accionBuscarAuto.php?dominio=POL-968
                

                            // Ahora puedes usar $urlCompleta para generar tu QR
                        ?>
                            <div id="divQR" style="display: none;">
                                <h2>Código QR para esta consulta</h2>
                                <img src="pruebaQR.php?url=<?php echo urlencode($urlCompleta); ?>" alt="Código QR generado">
                                
                            </div>
                            
                        <?php

                    }
                    else{
                        ?>
                        <h1><?=$resultado['error']?></h1>
                    <?php }
                ?>
                <div class="botonesQR">
                <a href="buscarAuto.php"><input type="button" value="Volver"></a>
                <input style="display: flex;" type="button" value="Mostrar QR" id="bttMostrar">
                <input style="display: none;" type="button" value="Ocultar QR" id="bttOcultar">
                </div>
            </div>
        </div>
        <script src="../../JS/mostrarQR.js"></script>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 