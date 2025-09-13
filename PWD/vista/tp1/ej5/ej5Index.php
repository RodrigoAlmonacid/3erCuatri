<!-- Inluye el header -->
<?php
    $title = "Ejercicio 5";
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
            <form action="ej5Resultado.php" class="formulario" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" maxlength="30" id="nombre" required>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" maxlength="30" id="apellido" required>            
                <label for="edad">Edad:</label>
                <input type="number" name="edad" min="1" max="99" id="edad" required>
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" maxlength="100" id="direccion" required>
                <label>Nivel máximo de estudios alcanzado:</label>
                <div class="radio-group">
                    <label><input type="radio" name="estudios" value="sin" required> No tiene estudios</label>
                    <label><input type="radio" name="estudios" value="prim"> Primario</label>
                    <label><input type="radio" name="estudios" value="sec"> Secundario</label>
                    <label><input type="radio" name="estudios" value="terc"> Terciario</label>
                </div>
                <label for="sexo">Ingrese su sexo:</label>
                <select name="sexo" id="sexo" required>
                    <option value="">Seleccione...</option>
                    <option value="m">Masculino</option>
                    <option value="f">Femenino</option>
                    <option value="o">Otro</option>
                </select>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </main>
<!-- Incluye footer -->
<?php
    include_once('../../estructura/footer.php')
?> 