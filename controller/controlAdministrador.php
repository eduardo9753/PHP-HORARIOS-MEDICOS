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


class ControlEventoAdministrador
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

    //HORARIOS MEDICOS REGISTRADOS MES ACTUAL
    public function Registrados()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            $i = 0;
            $ruta = 'Registrados';
            $show_medico = 'show';
            $active_medico = 'active';
            $mesActual = Date('Y-m');
            $mesActualCadena = $this->ASSET->mesActualCadena();
            $dataMedicoMesActual = $this->ADMIN->dataMedicoEstado(1, $mesActual);
            $titulo = "Registro de Horarios Medicos Estado : REGISTRADO - " . $mesActualCadena;
            include_once('view/administrador/estadoMedico/estadoRegistrado.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //HORARIOS MEDICOS REGISTRADOS MES SIGUIENTE
    public function RegistradosMesSiguiente()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            $i = 0;
            $ruta = 'RegistradosMesSiguiente';
            $show_medico_mes_siguiente = 'show';
            $active_medico_mes_siguiente = 'active';
            $mesSIGUIENTE = Date('Y') . '-' . $this->ASSET->mesSiguiente();
            $mesSiguienteCadena = $this->ASSET->mesSiguienteCadena();
            $dataMedicoMesSiguiente = $this->ADMIN->dataMedicoEstado(1, $mesSIGUIENTE);
            $titulo = "Registro de Horarios Medicos Estado : REGISTRADO - " . $mesSiguienteCadena;
            include_once('view/administrador/estadoMedicoMesSiguiente/estadoRegistradoMesSiguiente.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //HORARIOS MEDICOS APROBADOS MES ACTUAL
    public function Aprobados()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            $i = 0;
            $ruta = 'Aprobados';
            $show_medico = 'show';
            $active_medico = 'active';
            $mesActual = Date('Y-m');
            $dataMedico = $this->ADMIN->dataMedicoEstado(2, $mesActual);
            $mesActualCadena = $this->ASSET->mesActualCadena();
            $titulo = "Registro de Horarios Medicos Estado : APROBADOS - " . $mesActualCadena;
            include_once('view/administrador/estadoMedico/estadoAprobados.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //HORARIOS MEDICOS APROBADOS MES SIGUIENTE
    public function AprobadosMesSiguiente()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            $i = 0;
            $ruta = 'AprobadosMesSiguiente';
            $show_medico_mes_siguiente = 'show';
            $active_medico_mes_siguiente = 'active';
            $mesSIGUIENTE = Date('Y') . '-' . $this->ASSET->mesSiguiente();
            $mesSiguienteCadena = $this->ASSET->mesSiguienteCadena();
            $dataMedicoMesSiguiente = $this->ADMIN->dataMedicoEstado(2, $mesSIGUIENTE);
            $titulo = "Registro de Horarios Medicos Estado : APROBADOS - " . $mesSiguienteCadena;
            include_once('view/administrador/estadoMedicoMesSiguiente/estadoAprobadosMesSiguiente.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //HORARIOS MEDICOS RECHAZADOS MES ACTUAL
    public function Rechazados()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            $i = 0;
            $ruta = 'Rechazados';
            $show_medico = 'show';
            $active_medico = 'active';
            $mesActual = Date('Y-m');
            $dataMedico = $this->ADMIN->dataMedicoEstado(3, $mesActual);
            $titulo = "Registro de Horarios Medicos Estado : RECHAZADOS";
            include_once('view/administrador/estadoMedico/estadoRechazados.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //HORARIOS MEDICOS RECHAZADOS MES ACTUAL
    public function RechazadosMesSiguiente()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            $ruta = 'RechazadosMesSiguiente';
            $show_medico_mes_siguiente = 'show';
            $active_medico_mes_siguiente = 'active';

            $i = 0;
            $mesSIGUIENTE = Date('Y') . '-' . $this->ASSET->mesSiguiente();
            $mesSiguienteCadena = $this->ASSET->mesSiguienteCadena();
            $dataMedicoMesSiguiente = $this->ADMIN->dataMedicoEstado(3, $mesSIGUIENTE);
            $titulo = "Registro de Horarios Medicos Estado : RECHAZADOS - " . $mesSiguienteCadena;
            include_once('view/administrador/estadoMedicoMesSiguiente/estadoRechazadosMesSiguiente.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //CONSUMO DE DATOS PARA LOS EVENTOS REGISTRADOS DE CADA MEDICO (*ENLAZADOS)
    public  function getAllEventMedicoBYId()
    {
        try {
            //session start
            $this->SESSION->isSession();

            $id_medico = $_REQUEST['txt_id_medico'];
            $mes_actual = $_REQUEST['txt_mes'];
            $estado_evento = $_REQUEST['txt_estado'];
            $data = $this->ADMIN->allEventByIdAndMes($id_medico, $mes_actual, $estado_evento);
            echo json_encode($data);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //VISTA DEL CALENDARIO POR MEDICO Y POR ESTADO Y POR MES(*ENLAZADOS) CORE
    public function calendarioEstadoMedico()
    {
        try {
            //session start
            $this->SESSION->isSession();

            if (isset($_REQUEST['btn-horario-medico-mes-actual-registrado'])) {
                $ruta = 'Registrados';
                $show_medico = 'show';
                $active_medico = 'active';
                $id_medico = $_POST['txt_id_medico'];
                $estado = $_POST['txt_estado'];
                $mes = $_POST['txt_mes_actual'];
                $data = $this->ADMIN->medicoById($id_medico);
            } else if (isset($_REQUEST['btn-horario-medico-mes-actual-aprobados'])) {
                $ruta = 'Aprobados';
                $show_medico = 'show';
                $active_medico = 'active';
                $id_medico = $_POST['txt_id_medico'];
                $estado = $_POST['txt_estado'];
                $mes = $_POST['txt_mes_actual'];
                $data = $this->ADMIN->medicoById($id_medico);
            } else if (isset($_REQUEST['btn-horario-medico-mes-actual-rechazados'])) {
                $ruta = 'Rechazados';
                $show_medico = 'show';
                $active_medico = 'active';
                $id_medico = $_POST['txt_id_medico'];
                $estado = $_POST['txt_estado'];
                $mes = $_POST['txt_mes_actual'];
                $data = $this->ADMIN->medicoById($id_medico);
            } else if (isset($_REQUEST['btn-horario-medico-mes-siguiente-aprobados'])) { //DESDE DE AQUI EMPIEZA EL OTRO MES
                $ruta = 'AprobadosMesSiguiente';
                $show_medico_mes_siguiente = 'show';
                $active_medico_mes_siguiente = 'active';
                $id_medico = $_POST['txt_id_medico'];
                $estado = $_POST['txt_estado'];
                $mes = $_POST['txt_mes_actual'];
                if (Date('m') == '12') {
                    $mes = $this->ASSET->anioSiguiente() . "-01";
                }
                $data = $this->ADMIN->medicoById($id_medico);
            } else if (isset($_REQUEST['btn-horario-medico-mes-siguiente-registrado'])) { //DESDE DE AQUI EMPIEZA EL OTRO MES
                $ruta = 'RegistradosMesSiguiente';
                $show_medico_mes_siguiente = 'show';
                $active_medico_mes_siguiente = 'active';
                $id_medico = $_POST['txt_id_medico'];
                $estado = $_POST['txt_estado'];
                $mes = $_POST['txt_mes_actual'];
                if (Date('m') == '12') {
                    $mes = $this->ASSET->anioSiguiente() . "-01";
                }
                $data = $this->ADMIN->medicoById($id_medico);
            } else if (isset($_REQUEST['btn-horario-medico-mes-siguiente-rechazados'])) { //DESDE DE AQUI EMPIEZA EL OTRO MES
                $ruta = 'RechazadosMesSiguiente';
                $show_medico_mes_siguiente = 'show';
                $active_medico_mes_siguiente = 'active';
                $id_medico = $_POST['txt_id_medico'];
                $estado = $_POST['txt_estado'];
                $mes = $_POST['txt_mes_actual'];
                if (Date('m') == '12') {
                    $mes = $this->ASSET->anioSiguiente() . "-01";
                }
                $data = $this->ADMIN->medicoById($id_medico);
            }
            include_once('view/administrador/calendario/calendario.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZAR EL EVENTO A ESTADO APROBADO
    public function updateEventoMedicoMesAprovado()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $id_medico = $_POST['txt_id_medico'];
            $mes = $_POST['txt_mes'];
            $color = "#3ecd0a";
            $estado_inicial = $_POST['txt_estado'];
            $estado_final = "2";

            $dataRecorrido = $this->ADMIN->recorridoEventoMesByIdMedico($id_medico, $mes, $estado_inicial);
            foreach ($dataRecorrido as $data) :
                $save = $this->ADMIN->updateEventoMesByIdMedicoEstado($id_medico, $mes, $color, $estado_inicial, $estado_final);
            endforeach;

            if ($save) {
                $mount = Date('Y-m');
                if ($mes == $mount) {
                    echo 1;         //PARA LOS DE MES ACTUAL
                } else {
                    echo 3;         //PARA LOS DEL MES SIGUIENTE
                }
            } else {
                $mount = Date('Y-m');
                if ($mes == $mount) {
                    echo 2;         //PARA LOS DE MES ACTUAL
                } else {
                    echo 4;         //PARA LOS DEL MES SIGUIENTE
                }
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZAR EL EVENTO A ESTADO RECHAZADO
    public function updateEventoMedicoMesRechazado()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $id_medico = $_POST['txt_id_medico'];
            $mes = $_POST['txt_mes'];
            $color = "#e74a3b";
            $estado_inicial = $_POST['txt_estado'];
            $estado_final = "3";

            $dataRecorrido = $this->ADMIN->recorridoEventoMesByIdMedico($id_medico, $mes, $estado_inicial);
            foreach ($dataRecorrido as $data) :
                $save = $this->ADMIN->updateEventoMesByIdMedicoEstado($id_medico, $mes, $color, $estado_inicial, $estado_final);
            endforeach;

            if ($save) {
                $mount = Date('Y-m');
                if ($mes == $mount) {
                    echo 1;         //PARA LOS DE MES ACTUAL
                } else {
                    echo 3;         //PARA LOS DEL MES SIGUIENTE
                }
            } else {
                $mount = Date('Y-m');
                if ($mes = $mount) {
                    echo 2;         //PARA LOS DE MES ACTUAL
                } else {
                    echo 4;         //PARA LOS DEL MES SIGUIENTE
                }
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ELIMINAR LOS EVENTOS RECHAZADOS
    public function EliminarEventoMedicoMes()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $id_medico = $_POST['txt_id_medico'];
            $mes = $_POST['txt_mes'];
            $estado_inicial = $_POST['txt_estado'];

            $dataRecorrido = $this->ADMIN->recorridoEventoMesByIdMedico($id_medico, $mes, $estado_inicial);
            foreach ($dataRecorrido as $data) :
                $delete = $this->ADMIN->deleteEventoADM($data->id);
            endforeach;

            if ($delete) {
                $mount = Date('Y-m');
                if ($mes == $mount) {
                    echo 1;         //PARA LOS DE MES ACTUAL
                } else {
                    echo 3;         //PARA LOS DEL MES SIGUIENTE
                }
            } else {
                $mount = Date('Y-m');
                if ($mes == $mount) {
                    echo 2;         //PARA LOS DE MES ACTUAL
                } else {
                    echo 4;         //PARA LOS DEL MES SIGUIENTE
                }
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //ELIMINAR EVENTO ADM
    public function EliminarEventoADM()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $id_evento = $_POST['txt_id'];
            $delete = $this->ADMIN->deleteEventoADM($id_evento);

            if ($delete) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
