<?php
//conexion a la base de datos
date_default_timezone_set('America/Mexico_City');
$servidor="localhost";
$usuario="root";
$password="";
$bd="pruebas";
$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
mysqli_set_charset($conexion, "utf8");
//query para asignar datos a celda

$query_Recordset="SELECT po from t_persona WHERE po";
$Recordset = mysqli_query($conexion,$query_Recordset) or die(mysql_error());
$row_Recordset = mysqli_fetch_assoc($Recordset);
$totalRows_Recordset = mysqli_num_rows($Recordset);



// Incluir la libreria PHPExcel
require_once 'Classes/PHPExcel.php';

// Crea un nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Establecer propiedades
$objPHPExcel->getProperties()
->setCreator("Francisco Gutierrez")
->setLastModifiedBy("Foxconn")
->setTitle("Cartas de Instruccion")
->setSubject("Cartas de Instruccion")
->setDescription("Cartas para Exportacion de Material Electrinico")
->setKeywords("Excel Office 2007 openxml")
->setCategory("Pruebas de Excel");

//formato de color a las fuentes "letras"
$objPHPExcel->getActiveSheet()->setShowGridlines(false);
$objPHPExcel-> getActiveSheet()->getStyle ('F2')->getFont ()-> getColor() -> setARGB (PHPExcel_Style_Color :: COLOR_BLUE);
$objPHPExcel-> getActiveSheet()->getStyle ('D3')->getFont ()-> getColor() -> setARGB (PHPExcel_Style_Color :: COLOR_BLUE);
$objPHPExcel-> getActiveSheet()->getStyle ('F4')->getFont ()-> getColor() -> setARGB (PHPExcel_Style_Color :: COLOR_BLUE);
$objPHPExcel-> getActiveSheet()->getStyle ('M9')->getFont ()-> getColor() -> setARGB (PHPExcel_Style_Color :: COLOR_RED);


// aliniamiento al contenido de las celdas
$objPHPExcel-> getActiveSheet()->getStyle('A5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_LEFT);
$objPHPExcel-> getActiveSheet()->getStyle('A6:A12')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_RIGHT);
$objPHPExcel-> getActiveSheet()->getStyle('D6:D12')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_RIGHT);
$objPHPExcel-> getActiveSheet()->getStyle('L6:L12')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_RIGHT);
$objPHPExcel-> getActiveSheet()->getStyle('K48:K50')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_RIGHT);
$objPHPExcel-> getActiveSheet()->getStyle('K54:K57')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_RIGHT);
$objPHPExcel-> getActiveSheet()->getStyle('F2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('D14')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('A15:O45')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('L56')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('L67')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('G57')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('G60:G66')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);
$objPHPExcel-> getActiveSheet()->getStyle('K44')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment :: HORIZONTAL_CENTER);


//colocando los estilos de bordes
//bordes de todo el cuadro
$estilo = array(
  'borders' => array(
    'outline' => array(
      'style' => PHPExcel_Style_Border:: BORDER_THIN
    )
  )
);
//borde bajo
$bordeBajo = array(
  'borders' => array(
    'bottom' => array(
      'style' => PHPExcel_Style_Border:: BORDER_THIN
    )
  )
);
//rangos de los bordes
 $objPHPExcel->getActiveSheet()->getStyle('A6:N12')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A6:c12')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('K6:N12')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A6:A12')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A6:N6')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('k6:L12')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('D6:D12')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A7:d7')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A8:C8')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A9:c9')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A10:c10')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A11:c11')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('d12:j12')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('k8:n8')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('k10:n10')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('k12:n12')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A15:O15')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('B15:C15')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('F15')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('I15')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('K15')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('M15')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('O15')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A47:E57')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A48:E48')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A50:E50')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A52:C52')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A53')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('B53:E53')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A55:B55')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('C55:E55')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A57:E57')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('K47:M50')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('K48:M48')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('K50:M50')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('L54:L56')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('L55')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('L47:M47')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('L57:M57')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A51:E51')->applyFromArray($estilo);
 $objPHPExcel->getActiveSheet()->getStyle('A45:O45')->applyFromArray($bordeBajo);
 $objPHPExcel->getActiveSheet()->getStyle('G65:I65')->applyFromArray($bordeBajo);

//color en fondo de celdas
 function cellColor($cells,$color){
     global $objPHPExcel;
     $objPHPExcel->getActiveSheet()->getStyle($cells)->getFill()->applyFromArray(array(
         'type' => PHPExcel_Style_Fill::FILL_SOLID,
         'startcolor' => array(
              'rgb' => $color
						 )
     ));
 }
cellColor('A47:E47', 'b4b5b7');
cellColor('A51:E51', 'b4b5b7');
cellColor('A55:E55', 'b4b5b7');
cellColor('K47:M47', 'b4b5b7');

//accion para poner en negritas
$objPHPExcel->getActiveSheet()->getStyle('F2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A6:A12')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D6:D12')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('K6:L12')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A14:O15')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G16:H27')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A47')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D48')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A51')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A55')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('K47:M47')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A59:A62')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G16')->getFont()->setBold(true);

//cambio de tamaño de letra y tipografia
$font1 = array(
	 'font'  => array(
			 'size'  => 12,
			 'name'  => 'Arial'
	 ));
$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($font1);
$objPHPExcel->getActiveSheet()->getStyle('A14:N14')->applyFromArray($font1);
$font2 = array(
	 'font'  => array(
			 'size'  => 16,
			 'name'  => 'Arial'
	 ));
$objPHPExcel->getActiveSheet()->getStyle('D3')->applyFromArray($font2);
$font3 = array(
	 'font'  => array(
			 'size'  => 7,
			 'name'  => 'Arial'
	 ));
$objPHPExcel->getActiveSheet()->getStyle('F4')->applyFromArray($font3);
$objPHPExcel->getActiveSheet()->getStyle('A5:N5')->applyFromArray($font3);
$objPHPExcel->getActiveSheet()->getStyle('A59:A66')->applyFromArray($font3);

$font4 = array(
	 'font'  => array(
			 'size'  => 10,
			 'name'  => 'Arial'
	 ));
$objPHPExcel->getActiveSheet()->getStyle('A15:O57')->applyFromArray($font4);
$font5 = array(
	 'font'  => array(
			 'size'  => 8,
			 'name'  => 'Arial'
	 ));
$objPHPExcel->getActiveSheet()->getStyle('A6:N12')->applyFromArray($font5);

//Agrega imagenes al archivo excel
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('imgLogo');
$objDrawing->setDescription('LOGO');
$img = 'imagenes/fox.png'; //url para importar la imagen
$objDrawing->setPath($img);
$objDrawing->setOffsetX(28);
$objDrawing->setOffsetY(300);
$objDrawing->setCoordinates('A1'); // celda donde se va a posicionar
$objDrawing->setHeight(50); // tamaño del logo en pixeles
$objDrawing->setWorksheet($objPHPExcel->setActiveSheetIndex());

//Establece el rango de impresion en columnas
$objPHPExcel->getActiveSheet()->getPageSetup()->setPrintArea('A1:O67');

//Establece el rango de impresion con %
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(false);
$objPHPExcel->getActiveSheet()->getPageSetup()->setScale(60);

//Establece el rango de impresion acomodando margen
$objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.20);
$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft(0.25);
$objPHPExcel->getActiveSheet()->getPageMargins()->setHeader(0.20);
$objPHPExcel->getActiveSheet()->getPageMargins()->setRight(0.25);
$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom(0.09);
$objPHPExcel->getActiveSheet()->getPageMargins()->setFooter(0.09);

//formato a celdas en ancho y alto
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(13.57);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(13.57);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(2.14);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(9.00);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(17.43);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15.14);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(16.71);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(17.29);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(8.86);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10.71);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(11.43);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(11.86);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(17.14);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(15.43);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(19.00);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(2.86);
$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(13.50);
$objPHPExcel->getActiveSheet()->getRowDimension('3')->setRowHeight(18.00);
$objPHPExcel->getActiveSheet()->getRowDimension('4')->setRowHeight(11.25);
$objPHPExcel->getActiveSheet()->getRowDimension('5')->setRowHeight(15.75);

//combina celdas agrupando de una a varias
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('F2:I2');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D3:L3');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('F4:I4');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D14:L14');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D15:E15');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G15:H15');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D16:E16');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D19:E19');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G16:H16');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G19:H19');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G60:I60');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G66:I66');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('L57:M57');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('K47:M47');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('K48:L48');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('K49:L49');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('K50:L50');

// Agregar Informacion en las celdas
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('F2', 'PROYECTO DIRECT SHIP')
->setCellValue('D3', 'PCE PARAGON SOLUTIONS (MEXICO) S.A. DE C.V.')
->setCellValue('F4', 'Camino al Castillo No.2100 M El Salto, Jalisco 45680')
->setCellValue('A5', 'Datos Agente Aduanal:')
->setCellValue('D5', 'Destino:')
->setCellValue('A6', 'Fecha Factura:')
->setCellValue('A7', 'Para:')
->setCellValue('A8', 'Compania:')
->setCellValue('A9', 'TEL:')
->setCellValue('A10', 'Contacto')
->setCellValue('A11', 'CIA:')
->setCellValue('A12', 'TEL:')
->setCellValue('B10', 'Analista de Dist.')
->setCellValue('B11', 'PCE PARAGON')
->setCellValue('B12', '3284 4100 ext.')
->setCellValue('D6', 'Compañía:')
->setCellValue('D7', 'Direccion:')
->setCellValue('D12', 'Tax ID:')
->setCellValue('E12', 'N/A')
->setCellValue('L6', 'AWB:')
->setCellValue('L7', 'Incoterm:')
->setCellValue('L8', 'Carrier :')
->setCellValue('L9', 'Seguro:')
->setCellValue('L10', 'Flete / Gastos:')
->setCellValue('L11', 'Cuenta:')
->setCellValue('L12', 'Nivel de servicio:')
->setCellValue('M7', 'DDP')
->setCellValue('M9', 'Favor de asegurar este embarque')
->setCellValue('M10', 'PREPAID')
->setCellValue('D14', 'CARTA DE  INSTRUCCIONES PARA AGENTE ADUANAL')
->setCellValue('A15', 'Factura')
->setCellValue('B15', 'Orden')
->setCellValue('D15', 'Descripcion')
->setCellValue('F15', '#Parte')
->setCellValue('G15', 'Des_Espanol')
->setCellValue('I15', 'Cantidad')
->setCellValue('J15', 'Precio_unit')
->setCellValue('K15', 'V. Factura')
->setCellValue('L15', 'Fraccion')
->setCellValue('M15', 'Valor Agregado')
->setCellValue('N15', 'Costo NO NAFTA')
->setCellValue('O16', 'PT')
->setCellValue('O19', 'EB')
->setCellValue('H25', 'TOTALES')
->setCellValue('I25', '=SUM(I16:I19)')
->setCellValue('K25', '=(J16)')
->setCellValue('O15', 'Identificador partida')
->setCellValue('A47', 'INFORMACION DEL PEDIMENTO')
->setCellValue('A48', 'PEDIMENTO PARA SERVERS:')
->setCellValue('D48', 'RT  PT')
->setCellValue('A51', 'IDENTIFICADORES')
->setCellValue('A52', 'NIVEL DE PEDIMENTO: ')
->setCellValue('B52', 'ST 99')
->setCellValue('D52', 'A NIVEL PARTIDA:')
->setCellValue('A53', 'IM')
->setCellValue('B53', 'IC')
->setCellValue('A55', 'REGISTROS O PROGRAMAS')
->setCellValue('A56', 'No de Programa IMMEX: 187-2008')
->setCellValue('K47', 'DATOS DEL EMBARQUE:')
->setCellValue('K48', 'NUMERO DE CAJA:')
->setCellValue('K49', 'SELLO ADUANAL:')
->setCellValue('K50', 'SELLO PAPEL:')
->setCellValue('K54', 'PESO NETO:')
->setCellValue('K55', 'PESO BRUTO:')
->setCellValue('K56', 'BULTOS:')
->setCellValue('K57', 'MEDIDAS:')
->setCellValue('L56', '1')
->setCellValue('L57', 'VER DETALLE EN FACTURA')
->setCellValue('G60', 'ATENTAMENTE')
->setCellValue('G66', 'ANALISTA DE EXPORTACION')
->setCellValue('A59', 'DECLARAR EL DESTINATARIO DE CADA UNA DE LAS FACTURAS EN EL BLOQUE ')
->setCellValue('A60', 'QUE LE CORRESPONDE AL PEDIMENTO, DE ACUERDO AL INSTRUCTIVO DE LLENADO ')
->setCellValue('A61', 'ANEXO 22 RMCE  "Datos del Destinatario".')
->setCellValue('A62', 'Declarar esta leyenda en el campo de observaciones del pedimento')
->setCellValue('A63', 'Se anexa factura comercial')
->setCellValue('A64', 'No se paga el D.T.A de conformidad con el Art. 49 segundo parrafo, de la Ley Federal de Derechos.')
->setCellValue('A65', 'PCE PARAGON SOLUTIONS DE MEXICO S.A. DE C.V. Camino al Castillo No.2100  Edificio 7-A ')
->setCellValue('A66', 'Corredor Industrial El Salto, Jalisco C.P. 45680 ')
->setCellValue('A19', '=(A16)')
->setCellValue('B19', '=(B16)')
->setCellValue('L55', '=(L54)')
//->setCellValue('B6',$Recordset1)
//->setCellValue('E7',$Recordset11)
//->setCellValue('M6',$Recordset10)
//->setCellValue('M8',$Recordset9)
//->setCellValue('A16',$Recordset8)
->setCellValue('B16', $Recordset['po'];)
//->setCellValue('D16',$Recordset3)
//->setCellValue('F16',$Recordset2)
//->setCellValue('I16',$Recordset4)
//->setCellValue('J16',$Recordset5)
//->setCellValue('K16',$Recordset6)
//->setCellValue('L54',$Recordset7.'Kg')
->setCellValue('G19', 'CAJAS DE MADERA PARA TRANSPORTE');


// Renombrar Hoja
$objPHPExcel->getActiveSheet()->setTitle('Cartas de Instruccion');

// Establecer la hoja activa, para que cuando se abra el documento se muestre primero.
$objPHPExcel->setActiveSheetIndex(0);

//Coloque un nombre de archivo aleatorio para evitar ficheros repetidos.
$name= $Recordset;
$fecha= date("Y-m-d H:i:s");
$extencion="";

$nombre_archivo=$name."".$fecha."".$extencion;
$nombre_archivo=$name.$extencion;
// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)

// Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel.
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$nombre_archivo.'"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>
