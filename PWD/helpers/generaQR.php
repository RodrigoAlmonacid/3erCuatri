<?php
//Habilitar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Incluir el autoloader de Composer (con la ruta segura)
require __DIR__ . '../../vendor/autoload.php';

//Importar la clase 'Generator', que es la clase principal para PHP puro
use SimpleSoftwareIO\QrCode\Generator;

//Recuperar la URL
if (!isset($_GET['url']) || empty($_GET['url'])) {
    header("Content-Type: text/plain");
    die("Error: No se proporcionó una URL.");
}

$urlParaGenerar = $_GET['url'];

try {
    //Crear una INSTANCIA del generador de QR
    $qrcode = new Generator;

    //Usar el objeto para generar la imagen
    $imagenQR = $qrcode->format('png')
                       ->size(300)
                       ->margin(5)
                       ->generate($urlParaGenerar);

    //Enviar la imagen PNG al navegador
    header('Content-Type: image/png');
    echo $imagenQR;

} catch (Exception $e) {
    header('Content-Type: text/plain');
    echo 'Error al generar el QR: ' . $e->getMessage();
}

exit;
?>