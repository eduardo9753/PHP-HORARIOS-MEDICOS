<?php

//MODEL
include_once('model/modelMedico.php');
include_once('model/modelAdministrador.php');
include_once('model/modelAseets.php');

//DATOS
include_once('data/evento.php');
include_once('data/correo.php');


//UITLS
include_once('utils/modelSession.php');


class ControlLeerLibro
{
    public $MODEL;
    public $SESSION;
    public $ADMIN;
    public $ASSET;

    public function __construct()
    {
        $this->MODEL = new ModeloMedico();
        $this->SESSION = new ModeloSession();
        $this->ADMIN = new ModeloEventoAdministrador();
        $this->ASSET = new ModeloAssets();
    }

    
    public function leerLibroExcel()
    {
        try {
            $archivo = "doc/PROYECTOS_MEJORAS.xlsx";
            
            $inputFileType = PHPExcel_IOFactory::identify($archivo);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($archivo);

            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

            for ($fila = 1; $fila <= $highestRow; $fila++) {
                echo "" . $sheet->getCell("A" . $fila)->getValue() . " - " .
                          $sheet->getCell("G" . $fila)->getValue();
                echo "<br>";
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
