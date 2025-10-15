<?php
// Incluir el autoload de Composer
require '../../../vendor/autoload.php';

// Importar la clase principal
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

// 1. Recuperar la URL desde el parámetro GET
if (isset($_GET['url']) && !empty($_GET['url'])) {
    $urlParaGenerar = $_GET['url'];
} else {
    // Si no se proporciona URL, detenemos la ejecución
    die("URL no proporcionada.");
}

// 2. Configurar las opciones del QR
// Esta es una de las ventajas de esta librería, es muy personalizable
$options = new QROptions([
    'version'    => 5, // La "densidad" del QR, 5 es un buen valor estándar
    'outputType' => QRCode::OUTPUT_IMAGE_PNG, // Queremos una imagen PNG
    'eccLevel'   => QRCode::ECC_L, // Nivel de corrección de errores (L, M, Q, H)
    'scale'      => 10, // Tamaño de cada "punto" del QR en píxeles
    'imageBase64' => false, // Importante: poner en false para enviarla como imagen directa
]);

// 3. Generar el QR
// El método render() toma los datos (la URL) y genera la salida
$qrOutput = (new QRCode($options))->render($urlParaGenerar);

// 4. Enviar la imagen al navegador
// Primero, enviamos el encabezado para decirle al navegador que es una imagen PNG
header('Content-Type: image/png');

// Luego, mostramos la imagen generada
echo $qrOutput;

exit; // Detenemos el script aquí

