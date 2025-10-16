<?php
// 1. Habilitar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Incluir el autoloader de Composer (con la ruta segura)
require __DIR__ . '/../../../vendor/autoload.php';

// 3. Importar la clase 'Generator', que es la clase principal para PHP puro
use SimpleSoftwareIO\QrCode\Generator;

// 4. Recuperar la URL
if (!isset($_GET['url']) || empty($_GET['url'])) {
    header("Content-Type: text/plain");
    die("Error: No se proporcionó una URL.");
}

$urlParaGenerar = $_GET['url'];

try {
    // 5. Crear una INSTANCIA del generador de QR. ¡Este es el paso clave!
    $qrcode = new Generator;

    // 6. Usar el objeto que creaste para generar la imagen.
    // Nota que ahora usamos '->' (operador de objeto) en lugar de '::' (operador estático de Facade)
    $imagenQR = $qrcode->format('png')
                       ->size(300)
                       ->margin(5)
                       ->generate($urlParaGenerar);

    // 7. Enviar la imagen PNG al navegador
    header('Content-Type: image/png');
    echo $imagenQR;

} catch (Exception $e) {
    header('Content-Type: text/plain');
    echo 'Error al generar el QR: ' . $e->getMessage();
}

exit;
?>