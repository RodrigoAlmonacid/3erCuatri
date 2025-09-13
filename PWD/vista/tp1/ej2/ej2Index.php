<!-- Inluye el header -->
<?php
    $title = "Ejercicio 2";
    include_once('../../estructura/head.php')
?>
<!-- Espacio para incluir archivos js o css propios de esta vista -->
</head>
<body>
    <!-- Incluye el menu -->
    <?php
    include_once '../../estructura/menu.php'
    ?>
    <main>
        <div class="contenedor">
            <h1>Programación Web Dinámica</h1>
            <form class="formulario" action="ej2Resultado.php" method="get">
                <label for="cantDias">¿cuántos días a la semana cursa?</label>
                <input type="number" min="1" max="7" name="cantDias" id="dias" required>
                <button type="button" id="bttDias">Aceptar</button>
                <div style="display:none;" id="divDias">

                </div>
                <input type="submit" value="Enviar" id="bttEnviar" style="display:none;">
            </form>
        </div>
        <script src="../../JS/ej2.js"></script>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 