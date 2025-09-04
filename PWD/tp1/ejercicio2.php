<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="ejer2.css">
</head>
<body>
    <div class="neumorphic neumorphic-card">
        <h2>Horarios semanales de Programación Web Dinámica</h2>
        <form action="horarios.php" method="get">
            <table>
                <tr>
                    <th>Día</th>
                    <th colspan="2">Carga horaria</th>
                </tr>
                <tr>
                    <td>Lunes</td>
                    <td>Horas: <input type="number" class="neumorphic neumorphic-input" name="lunes['hora']" id="horaLun">, 
                        minutos: <input type="number" class="neumorphic neumorphic-input" name="lunes['minuto']" id="minLun">
                    </td>
                </tr>
                <tr>
                    <td>Martes</td>
                    <td>Horas: <input type="number" class="neumorphic neumorphic-input" name="martes['hora]" id="horaMar">,
                        minutos: <input type="number" class="neumorphic neumorphic-input" name="martes['minuto']" id="minMar">
                    </td>
                </tr>
                <tr>
                    <td>Miércoles</td>
                    <td>Horas: <input type="number" class="neumorphic neumorphic-input" name="miercoles['hora]" id="horaMier">,
                        minutos: <input type="number" class="neumorphic neumorphic-input" name="miercoles['minuto']" id="horaMier">
                    </td>
                </tr>
                <tr>
                    <td>Jueves</td>
                    <td>Horas: <input type="number" class="neumorphic neumorphic-input" name="jueves['hora]" id="horaJue">,
                        minutos: <input type="number" class="neumorphic neumorphic-input" name="jueves['minuto']" id="horaJue">
                    </td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td>Horas: <input type="number" class="neumorphic neumorphic-input" name="viernes['hora]" id="horaVier">,
                        minutos: <input type="number" class="neumorphic neumorphic-input" name="viernes['minuto']" id="horaVier">
                    </td>
                </tr>
                <tr><td colspan="2"><input type="submit" class="neumorphic neumorphic-input" value="Enviar"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>