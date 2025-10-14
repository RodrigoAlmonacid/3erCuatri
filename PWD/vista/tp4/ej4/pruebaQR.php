<?php
require 'vendor/autoload.php';

use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// Crear el objeto del escritor (output PNG)
$writer = new PngWriter();

// Crear el objeto QR (en la v6 se usa new, no create)
$qr = new QrCode(
    data: 'aca debo poner la url de la consulta',
    encoding: new Encoding('UTF-8'),
    //errorCorrectionLevel: new ErrorCorrectionLevelHigh(),
    size: 250,
    margin: 10
);

// Generar el resultado (imagen QR)
$result = $writer->write($qr);

// Enviar la imagen al navegador
header('Content-Type: ' . $result->getMimeType());
echo $result->getString();


