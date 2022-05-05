<?php

//MODEL
include_once('model/modelGrafico.php');
include_once('utils/modelMensaje.php');
include_once('model/modelAseets.php');

//DATOS
include_once('data/usuario.php');

//UITLS
include_once('utils/modelSession.php');


class ControlGrafico
{

    public $MODELOGRAFICO;
    public $MSG;
    public $SESSION;
    public $ASSET;

    public function __construct()
    {
        $this->MODELOGRAFICO = new ModeloGrafico;
        $this->MSG = new ModeloMensaje();
        $this->SESSION = new ModeloSession();
        $this->ASSET = new ModeloAssets();
    }

    //
    public function Graficos()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $titulo = "Graficos";

            //color de links
            if (isset($_REQUEST['ruta']) == 'Graficos') {
                $ruta = 'Graficos';
                $show_grafico = 'show';
                $active_grafico = 'active';
            }

            $dataRegistrados = $this->MODELOGRAFICO->countRegistrados();
            $dataAprobados = $this->MODELOGRAFICO->countAprovados();
            $dataRechazados = $this->MODELOGRAFICO->countRechazados();
            $dataTotal = $this->MODELOGRAFICO->countTotal();

            include_once('view/administrador/graficos/graficos.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
