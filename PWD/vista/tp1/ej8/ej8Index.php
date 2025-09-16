<!-- Inluye el header -->
<?php
    $title = "Ejercicio 8";
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
            <form action="ej8Resultado.php" class="formulario" method="post">
                <label for="cine">Cine:</label>
                <label for="edad">Ingrese su edad: <input type="number" min="0" max="120" name="edad" id="edad"></label>
                <label for="estudia">Es estudiante?</label>
                <div class="radio-group">
                    <label><input type="radio" name="estudia" value="1" id="si">Si</label>
                    <label><input type="radio" name="estudia" value="0" id="no">No</label>
                </div>
                <input type="submit" value="Calcular">
            </form>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 