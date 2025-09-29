<!-- Inluye el header -->
<?php
    $title = "Ejercicio 2";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
include_once('../../../helpers/tipoAction.php');
$datosForm=getSubmittedData();
include_once '../../../control/tp1/ej2HorasCursada.php';
$respuesta=horasCursada($datosForm);
$dias=$respuesta['cantDias'];
$horas=$respuesta['cantHoras'];
$minutos=$respuesta['cantMinutos'];
$semana=$respuesta['horaXdia'];
$error=$respuesta['error'];
$i=0;
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
            if($error==""){ ?>
                <h2>Horas de cursada, Materia PWD</h2>
                <ul>
                    <h3>Cursa en total <?=$dias?> día<?php if($dias>1){?>s<?php }?>.</h3>
                    <div class="radio-group">
                    <?php
                        foreach($semana as $unDia){ 
                            $i++;?>
                            <li>Día <?=$i?>: <?=$unDia?> hs.</li>
                        <?php }?>
                        <li>Total: <?=$horas?> horas y <?=$minutos?> minutos.</li>
                </ul>
            <?php }
            else{ ?>
                <h2><?=$error?></h2>
            <?php }?>

        <div>
            <a href="ej2Index.php"><input type="button" value="Volver"></a>
        </div>
                        </div>
    </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 