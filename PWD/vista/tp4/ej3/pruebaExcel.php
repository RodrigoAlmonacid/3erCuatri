<?php
// Archivo: /controladores/MiControlador.php
session_start();
$arreglo=$_SESSION['arregloExport'];

// 1. Importa las clases de PhpSpreadsheet al inicio de tu archivo
require __DIR__ . '../../../../vendor/autoload.php'; // Ajusta la ruta a tu 'vendor/autoload.php'
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



        // 3. Crear instancia de la hoja de cálculo
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // 4. Agregar los encabezados de la tabla
        $sheet->setCellValue('A1', 'PATENTE');
        $sheet->setCellValue('B1', 'MARCA');
        $sheet->setCellValue('C1', 'MODELO');
        $sheet->setCellValue('D1', 'DUENIO');
        $sheet->setCellValue('E1', 'DNI');
        // ... agrega todos los encabezados que necesites

        // 5. Llenar el archivo con los datos del arreglo
        $fila = 2; // Empezamos a escribir en la fila 2
        foreach ($arreglo as $registro) {
            // Asumiendo que tu arreglo es indexado numéricamente
            $sheet->setCellValue('A' . $fila, $registro['patente']);
            $sheet->setCellValue('B' . $fila, $registro['marca']);
            $sheet->setCellValue('C' . $fila, $registro['modelo']);
            $sheet->setCellValue('D' . $fila, $registro['duenio']);
            $sheet->setCellValue('E' . $fila, $registro['dniDuenio']);
            // ... continúa para cada columna
            $fila++;
        }

        // 6. Configurar las cabeceras para forzar la descarga
        $fileName = "Listado de Autos" . date('Y-m-d') . ".xlsx";
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . urlencode($fileName) . '"');
        header('Cache-Control: max-age=0');

        // 7. Crear el "escritor" y guardar el archivo en la salida del navegador
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');

        // 8. ¡Muy importante! Terminar el script.
        // Esto previene que se ejecute cualquier otro código (como renderizar una vista)
        // y corrompa el archivo Excel.
        exit;

?>