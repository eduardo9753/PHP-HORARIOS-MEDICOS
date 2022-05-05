<?php
// Crea un nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Establecer propiedades
$objPHPExcel->getProperties()
->setCreator("Cattivo")
->setLastModifiedBy("Cattivo")
->setTitle("Documento Excel de Prueba")
->setSubject("Documento Excel de Prueba")
->setDescription("Demostracion sobre como crear archivos de Excel desde PHP.")
->setKeywords("Excel Office 2007 openxml php")
->setCategory("Datos en Excel");

// Agregar Informacion
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'N°')
->setCellValue('B1', 'HISTORIA')
->setCellValue('C1', 'PACIENTE')
->setCellValue('D1', 'DOCUMENTO')
->setCellValue('E1', 'GENERO')
->setCellValue('F1', 'MEDICO')
->setCellValue('G1', 'ESPECIALIDAD')
->setCellValue('H1', 'FECHA SALA')
->setCellValue('I1', 'FECHA RECUPERACION')
->setCellValue('J1', 'FECHA SALIDA');


//Datos de la BD
$i = 2; //imprime en 2 fila
$a = 1;
foreach ($dataTotal as $data) : 
    $objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue("A$i", $a)
    ->setCellValue("B$i", $data->ID_NHC)
    ->setCellValue("C$i", $data->NOMBRE_PAC)
    ->setCellValue("D$i", $data->DOCUMENTO)
    ->setCellValue("E$i", $data->SEXO_PAC)
    ->setCellValue("F$i", $data->NOMBRE_PROFESIONAL)
    ->setCellValue("G$i", $data->NOMBRE_ESPECIALIDAD)
    ->setCellValue("H$i", $data->FECHA_CHEKLIST)
    ->setCellValue("I$i", $data->FECHA_RECUPERACION)
    ->setCellValue("J$i", $data->FECHA_SALIDA);
    $a++;
    $i++;

endforeach;


// Renombrar Hoja
$objPHPExcel->getActiveSheet()->setTitle('Tecnologia Simple');
// Establecer la hoja activa, para que cuando se abra el documento se muestre primero.
$objPHPExcel->setActiveSheetIndex(0);


// Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel.
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Datos.xlsx"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//SOLUCION POSIBLE SI DA ERROR
ob_end_clean();
$objWriter->save('php://output');
exit;
?>
