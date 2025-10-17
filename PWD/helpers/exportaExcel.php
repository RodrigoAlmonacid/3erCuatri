<?php
    session_start();
    $arreglo=$_SESSION['arregloExport'];

    // 1. Importa las clases de PhpSpreadsheet al inicio de tu archivo
    require __DIR__ . '../../vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    //Crear instancia de la hoja de cálculo
    $hojaExcel = new Spreadsheet();
    $sheet = $hojaExcel->getActiveSheet();
    if($arreglo['tipo']=='personas'){
        //encabezados de la tabla
        $sheet->setCellValue('A1', 'DNI');
        $sheet->setCellValue('B1', 'APELLIDO');
        $sheet->setCellValue('C1', 'NOMBRE');
        $sheet->setCellValue('D1', 'NACIMIENTO');
        $sheet->setCellValue('E1', 'TELEFONO');
        $sheet->setCellValue('F1', 'DIRECCION');

        $fila = 2; //Fila 1 es el encabezado
        foreach ($arreglo['listado'] as $registro) {
            $sheet->setCellValue('A' . $fila, $registro['dni']);
            $sheet->setCellValue('B' . $fila, $registro['apellido']);
            $sheet->setCellValue('C' . $fila, $registro['nombre']);
            $sheet->setCellValue('D' . $fila, $registro['fechaNac']);
            $sheet->setCellValue('E' . $fila, $registro['telefono']);
            $sheet->setCellValue('F' . $fila, $registro['domicilio']);
            $fila++;
        }
    }

    elseif($arreglo['tipo']=='autos'){
        //Encabezados de la tabla
        $sheet->setCellValue('A1', 'PATENTE');
        $sheet->setCellValue('B1', 'MARCA');
        $sheet->setCellValue('C1', 'MODELO');
        $sheet->setCellValue('D1', 'DUENIO');
        $sheet->setCellValue('E1', 'DNI');

        $fila = 2;
        foreach ($arreglo['listado'] as $registro) {
            $sheet->setCellValue('A' . $fila, $registro['patente']);
            $sheet->setCellValue('B' . $fila, $registro['marca']);
            $sheet->setCellValue('C' . $fila, $registro['modelo']);
            $sheet->setCellValue('D' . $fila, $registro['duenio']);
            $sheet->setCellValue('E' . $fila, $registro['dniDuenio']);
            $fila++;
        }
    }

    // 6. Configurar las cabeceras para forzar la descarga
    $fileName = "Listado de ".$arreglo['tipo']."-".date('Y-m-d').".xlsx";
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . urlencode($fileName) . '"');
    header('Cache-Control: max-age=0');
    // 7. Crear el "escritor" y guardar el archivo en la salida del navegador
    $writer = new Xlsx($hojaExcel);
    $writer->save('php://output');
    // 8. ¡Muy importante! Terminar el script.
    // Esto previene que se ejecute cualquier otro código (como renderizar una vista)
    // y corrompa el archivo Excel.
    exit;
?>