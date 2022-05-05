<?php

//MODEL
include_once('model/modelGrafico.php');
include_once('utils/modelMensaje.php');
include_once('model/modelReportes.php');

//DATOS
include_once('data/usuario.php');


//UITLS
include_once('utils/modelSession.php');

class ControlReportes
{

    public $MODELOGRAFICO;
    public $MSG;
    public $SESSION;
    public $REPORTE;

    public function __construct()
    {
        $this->MODELOGRAFICO = new ModeloGrafico;
        $this->MSG = new ModeloMensaje();
        $this->SESSION = new ModeloSession();
        $this->REPORTE = new ModeloReportes();
    }


    public function ExcelSop()
    {
        try {
            //session start
            //$this->SESSION->isSession();

            $titulo = "Graficos";

            //color de links
            if (isset($_REQUEST['ruta']) == 'Graficos') {
                $ruta = 'Graficos';
                $show_grafico = 'show';
                $active_grafico = 'active';
            }

            $dataTotal = $this->REPORTE->dataSop();

            include_once('view/excel/excelSop.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
