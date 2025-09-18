<!-- Inluye el header -->
<?php
    $title = "Listado";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
<?php
    include_once('../../../control/tp4/ej3VerAutos.php')
?>
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <h1>Listado:</h1>
            <?php
                if(count($arregloAutos)>0){
                    foreach($arregloAutos as $unAuto){
                        echo $unAuto."<br>";
                    }
                }
                else{echo "No se encontraron registros.";}
            ?> 
            <a href="VerAutos.php"><input type="button" value="Volver"></a>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 