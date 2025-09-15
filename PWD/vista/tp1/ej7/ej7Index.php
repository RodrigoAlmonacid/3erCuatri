<!-- Inluye el header -->
<?php
    $title = "Ejercicio 7";
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
            <form action="ej7Resultado.php" class="formulario" method="get">
                <label for="calculadora">Claculadora</label>
                    <input type="number" placeholder="Número 1" name="num1" id="num1">
                    <input type="number" placeholder="Número 2" name="num2" id="num2">
                    <label for="operacion">
                        Operacion: <select name="operacion" id="operacion">
                    </label>
                        <option value="sum">Suma</option>
                        <option value="res">Resta</option>
                        <option value="mult">Multiplicación</option>
                        <option value="div">División</option>
                    </select>
                    <input type="submit" value="Calcular">
                </label>
            </form>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 