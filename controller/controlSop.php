<?php


//MODEL
include_once('model/modelGrafico.php');
include_once('model/modelSop.php');


//DATOS
include_once('data/usuario.php');
include_once('data/paciente.php');


//UITLS
include_once('utils/modelSession.php');
include_once('utils/modelMensaje.php');



class ControlSop
{

    public $MODELOGRAFICO;
    public $MSG;
    public $SESSION;
    public $SOP;
    public $UTILS;

    public function __construct()
    {
        $this->MODELOGRAFICO = new ModeloGrafico;
        $this->MSG = new ModeloMensaje();
        $this->SESSION = new ModeloSession();
        $this->SOP = new ModeloSop();
    }


    public function PacientesEnSala()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $titulo = "PACIENTES SALA DE OPERACIONES ESTADOS";

            //color de links
            if (isset($_REQUEST['ruta']) == 'PacientesEnSala') {
                $ruta = 'PacientesEnSala';
                $show_paciente = 'show';
                $active_paciente = 'active';
            }
            $dataSopMySql = $this->SOP->allPaciente();
            $i = 0;

            include_once('view/pacientes/paciente.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function pacienteEstado()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $paciente = new Paciente();
            $paciente->setID_NHC($_POST['txt_id']);
            $paciente->setESTADO($_POST['txt_estado']);

            $save = $this->SOP->pacienteCritico($paciente);

            $titulo = "PACIENTES SALA DE OPERACIONES ESTADOS";
            $ruta = 'PacientesEnSala';
            $show_paciente = 'show';
            $active_paciente = 'active';

            $dataSopMySql = $this->SOP->allPaciente();
            $i = 0;

            if ($save) {
                $msg = "SE ACTUALIZO EL DATO CORRECTAMENTE";
                echo $this->MSG->success();
                include_once('view/pacientes/paciente.php');
            } else {
                $msg = "NO ACTUALIZO EL DATO CORRECTAMENTE";
                echo $this->MSG->error($msg);
                include_once('view/pacientes/paciente.php');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /*ACTUALIZACION DE MEDICOS 
    public function updatemedico()
    {
        $dataCompania = $this->SOP->compania();
        $dataMedico = $this->SOP->medicos();

        $i = 0;
        foreach ($dataMedico as $data) :
            $nombreCompania = $data->id_compania;
            $i = $i + 1;

            //COMPANIA
            foreach ($dataCompania as $data) :
                if ($nombreCompania == $data->nombre_compania) {
                    if ($this->SOP->consultorioMedico($data->nombre_compania, $data->id_compania)) {
                        echo "logrado";
                        echo "<br>";
                    }
                    //echo $i." Compañia: " . $nombreCompania ."   id: ".$data->id_compania;
                    //echo "<br>";
                    //echo $i." Nombre Compania:" . $data->nombre_compania ."  id  : ".$data->id_compania;
                    //echo "<br>";
                    //echo "<br>";
                }
            endforeach;
        endforeach;
    }


    public function fechasRecorrido()
    {
        try {
            $fecha_inicio = date_create('2022-04-03 09:07:53');
            $dia_incio_mes = date_format($fecha_inicio, 'd');
            echo $dia_incio_mes;

            $fecha_final = date_create('2022-04-30 09:07:53');
            $dia_final_mes = date_format($fecha_final, 'd');
            echo $dia_final_mes;

            //crear una funcion para extraer la fecha 
            //crear otra funcion para extraer la hora y minutos
            //crear otra funcion para entraer los dias y recorrer el while

            echo "<br>";

            $contador = 1;

            while ($dia_incio_mes <= $dia_final_mes) {
                $fecha_aumento = date("Y-m");
                $hora = date("H:i:s");
                $fecha_aumento = $fecha_aumento . "-" . $dia_incio_mes . " " . $hora;

                //if mes es 28 dias - al ultimo restarle 1 dia
                if ($dia_final_mes == 28) {
                    if ($contador == 3) {
                        //Restando 1 dias
                        $fecha_aumento = date("Y-m");
                        $fecha_aumento = $fecha_aumento . "-" . $dia_incio_mes;
                        $fecha_final = strtotime($fecha_aumento . "- 1 days");
                        echo "Fecha Resta: " . date("d-m-Y", $fecha_final) . "\n";
                    }
                }
                echo "<br>";
                echo $contador . "Fecha:" . $fecha_aumento;

                //CADA RECORRIDO SE SUMA 7 HASTA LLEGAR AL DIA FINAL
                $dia_incio_mes = $dia_incio_mes + 7;
                $contador++;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }*/
}
