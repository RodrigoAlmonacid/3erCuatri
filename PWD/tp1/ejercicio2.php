<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h2>Horarios semanales de Programación Web Dinámica</h2>
    <form action="horarios.php" method="get">
        <table border="1px">
            <tr>
                <th>Día</th>
                <th colspan="2">Carga horaria</th>
            </tr>
            <tr>
                <td>Lunes</td>
                <td>Horas: <input type="number" name="lunes['hora']" id="horaLun">, 
                    minutos: <input type="number" name="lunes['minuto']" id="minLun">
                </td>
            </tr>
            <tr>
                <td>Martes</td>
                <td>Horas: <input type="number" name="martes['hora]" id="horaMar">,
                    minutos: <input type="number" name="martes['minuto']" id="horaMar">
                </td>
            </tr>
            <tr>
                <td>Miércoles</td>
                <td>Horas: <input type="number" name="miercoles['hora]" id="horaMier">,
                    minutos: <input type="number" name="miercoles['minuto']" id="horaMier">
                </td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td>Horas: <input type="number" name="jueves['hora]" id="horaJue">,
                    minutos: <input type="number" name="jueves['minuto']" id="horaJue">
                </td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td>Horas: <input type="number" name="viernes['hora]" id="horaVier">,
                    minutos: <input type="number" name="viernes['minuto']" id="horaVier">
                </td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="Enviar"></td></tr>
        </table>
    </form>
</body>
</html>