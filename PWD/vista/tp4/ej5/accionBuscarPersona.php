<!-- Inluye el header -->
<?php
    $title = "Persona";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../helpers/tipoAction.php');
    $datosForm=getSubmittedData();
    include_once('../../../control/tp4/controlPersona.php');
    $resultado=buscarAutoPersona($datosForm['dni']);
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
                    $encuentra=$resultado['encuentra'];
                    $error=$resultado['error'];
                    $arregloAutos=$resultado['arreglo'];
                    $unaPersona=$resultado['persona'];
                    $cantidad=count($arregloAutos);
                    $nombre=$unaPersona->getNombre();
                    $apellido=$unaPersona->getApellido();
                    $dni=$unaPersona->getNroDni();
                    $nacimiento=$unaPersona->getFechaNac();
                    $telefono=$unaPersona->getTelefono();
                    $domicilio=$unaPersona->getDomicilio();
                    $anio=substr($nacimiento, 0, 4);
                    $mes=substr($nacimiento, 5, 2);
                    $dia=substr($nacimiento, 8, 2);
                    if($encuentra){
                        ?>
                        <h2>Persona encontrada:</h2>
                        <ul>
                            <li>Nombre: <?=$nombre?></li>
                            <li>Apellido: <?=$apellido?></li>
                            <li>Dni N°: <?=$dni?></li>
                            <li>Fecha de nacimiento: <?=$dia?>/<?=$mes?>/<?=$anio?></li>
                            <li>Telefono: <?=$telefono?></li>
                            <li>Domicilio: <?=$domicilio?></li>
                        </ul>
                        <?php 
                        if($cantidad>0){
                            ?>
                            <h2>La persona tiene <?=$cantidad?> auto<?php if($cantidad>1){?>s<?php }?></h2>
                            <h2>Listado:</h2>
                            <?php
                            for($i=0; $i<$cantidad; $i++){
                                ?>
                                <ul>
                                    <li>Marca: <?=$arregloAutos[$i]['Marca']?></li>
                                    <li>Modelo: <?=$arregloAutos[$i]['Modelo']?></li>
                                    <li>Patente: <?=$arregloAutos[$i]['Patente']?></li>
                                </ul>
                                <?php
                            }
                            
                        }
                        else{
                            ?>
                            <h2>No se encontraron autos registrados con el DNI <?=$datosForm['dni']?></h2>
                            <?php    
                        }
                        //Encuentro a la persona, genero su QR
                        // 1. Obtener el nombre del host (dominio)
                        // Si la cabecera X-Forwarded-Host existe (enviada por ngrok), la usa
                        // Si no, usa la cabecera HTTP_HOST normal.
                        $host = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST'];
                                            
                        // 2. Determinar el protocolo (http o https)
                        // Si la cabecera X-Forwarded-Proto existe, la usa
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
                                <img src="../../../helpers/generaQR.php?url=<?php echo urlencode($urlCompleta); ?>" alt="Código QR generado">   
                            </div>    
                        <?php
                    }
                    else{
                        ?>
                        <h2><?=$error?>.</h2>
                        <?php
                    }
                ?> 
                <div class="botonesExtra">
                    <a href="autoPersona.php"><input type="button" value="Volver"></a>
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