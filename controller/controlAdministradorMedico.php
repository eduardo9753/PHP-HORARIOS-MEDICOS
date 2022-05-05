<?php

//MODEL
include_once('model/modelMedico.php');
include_once('model/modelAdministrador.php');
include_once('model/modelAseets.php');
include_once('model/modelAdministradorMedico.php');


//DATOS
include_once('data/evento.php');
include_once('data/correo.php');
include_once('data/usuario.php');
include_once('data/compania.php');
include_once('data/consultorio.php');
include_once('data/especialidad.php');
include_once('data/especialidadMedico.php');
include_once('data/medico.php');
include_once('data/estadoMedico.php');


//UITLS
include_once('utils/modelSession.php');


class ControlEventoAdministradorMedico
{
    public $MODEL;
    public $SESSION;
    public $ADMIN;
    public $ASSET;
    public $ADMINMEDICO;

    public function __construct()
    {
        $this->MODEL = new ModeloMedico();
        $this->SESSION = new ModeloSession();
        $this->ADMIN = new ModeloEventoAdministrador();
        $this->ASSET = new ModeloAssets();
        $this->ADMINMEDICO = new ModeloAdministradorMedico();
    }


    //DATOS DE LOS MEDICOS
    public function Medico()
    {
        try {

            $this->SESSION->isSession();
            //color de links
            if (isset($_REQUEST['ruta']) == 'Medico') {
                $ruta = 'Medico';
                $show_medico_gestion = 'show';
                $active_medico_gestion = 'active';
            }

            $dataCompanias = $this->ADMINMEDICO->DataCompania();
            $dataConsultorio = $this->ADMINMEDICO->dataConsultorio();
            $dataEspecialidades = $this->ADMINMEDICO->DataEspecialidades();

            $i = 0;
            $dataMedico = $this->ADMINMEDICO->dataMedico();
            $titulo = "Medicos";
            include_once('view/administrador/medico/registrarMedico.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //REGISTRAR UN NUEVO MEDICO
    public function RegistrarMedico()
    {
        try {
            $this->SESSION->isSession();

            $usuario = new Usuario();
            $medico = new Medico();
            $especialidad = new Especialidad();

            $usuario->setnombreUser($_POST['txt_codigo_medico']);
            $usuario->setcontraUser($_POST['txt_codigo_medico']);
            $usuario->setfoto('foto.jpg');
            $usuario->setperfil('MEDICO');

            $saveUsuario = $this->ADMINMEDICO->insertUsuario($usuario);

            if ($saveUsuario) {
                $id = $this->ASSET->lastIdUsuario('usuario');
                $ultimoIdUsuario = $id[0];

                $medico->setnombre_medico($_POST['txt_medico']);
                $medico->setcodigo_medico($_POST['txt_codigo_medico']);
                $medico->setid_consultorio($_POST['txt_consultorio']);
                $medico->setid_estado_medico('1');
                $medico->setid_compania($_POST['txt_compania']);
                $medico->setid_usuario($ultimoIdUsuario);
                $medico->setfoto('public/img/foto.jpg');

                $saveMedico = $this->ADMINMEDICO->insertMedico($medico);

                if ($saveMedico) {
                    $id = $this->ASSET->lastIdMedico('medico');
                    $ultimoIdMedico = $id[0];

                    $medico->setid_medico($ultimoIdMedico);
                    $especialidad->setid_especialidad($_POST['txt_especialidad']);

                    $save = $this->ADMINMEDICO->insertEspecialidadMedico($especialidad, $medico);

                    if ($save) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                } else {
                    echo 0;
                }
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //DATOS DE LOS CONSULTORIO
    public function Consultorios()
    {
        try {
            $this->SESSION->isSession();

            //color de links
            if (isset($_REQUEST['ruta']) == 'Consultorios') {
                $ruta = 'Consultorios';
                $show_medico_gestion = 'show';
                $active_medico_gestion = 'active';
            }

            $i = 0;
            $dataConsultorio = $this->ADMINMEDICO->dataConsultorio();
            $titulo = "Consultorios";
            include_once('view/administrador/medico/consultorios.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //REGISTRAR UN NUEVO CONSULTORIO
    public function registrarConsultorio()
    {
        try {
            $this->SESSION->isSession();
            $consultorio = new Consultorio();
            $consultorio->setnombre_consultorio($_POST['txt_consultorio']);

            $save = $this->ADMINMEDICO->insertConsultorio($consultorio);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function ActualizarConsultorio()
    {
        try {
            $this->SESSION->isSession();
            $consultorio = new Consultorio();
            $consultorio->setnombre_consultorio($_POST['txt_nombre_consultorio']);
            $consultorio->setid_consultorio($_POST['txt_id_consultorio']);
            $consultorio->setestado($_POST['txt_estado_consultorio']);

            $save = $this->ADMINMEDICO->updateConsultorio($consultorio);

            if ($save) {
                header('Location:Consultorios');
            } else {
                header('Location:Consultorios');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //DATOS DE LAS ESPECIALIDADES
    public function Especialidades()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            if (isset($_REQUEST['ruta']) == 'Especialidades') {
                $ruta = 'Especialidades';
                $show_medico_gestion = 'show';
                $active_medico_gestion = 'active';
            }

            $i = 0;
            $dataEspecialidades = $this->ADMINMEDICO->DataEspecialidades();
            $titulo = "Especialidades";
            include_once('view/administrador/medico/especialidades.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    
    //REGISTRAR NUEVA ESPECIALIDAD
    public function registrarEspecialidad()
    {
        try {
            $this->SESSION->isSession();
            $especialidad = new Especialidad();
            $especialidad->setnombre_especialidad($_POST['txt_especialidad']);

            $save = $this->ADMINMEDICO->insertEspecialidad($especialidad);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function ActualizarEspecialidad()
    {
        try {
            $this->SESSION->isSession();
            $especialidad = new Especialidad();
            $especialidad->setnombre_especialidad($_POST['txt_nombre_especialidad']);
            $especialidad->setid_especialidad($_POST['txt_id_especialidad']);
            $especialidad->setestado($_POST['txt_estado_especialidad']);


            $save = $this->ADMINMEDICO->updateEspecialidad($especialidad);

            if ($save) {
                header('Location:Especialidades');
            } else {
                header('Location:Especialidades');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //DATOS DE LAS COMPAÑIAS
    public function Companias()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            if (isset($_REQUEST['ruta']) == 'Companias') {
                $ruta = 'Companias';
                $show_medico_gestion = 'show';
                $active_medico_gestion = 'active';
            }

            $i = 0;
            $dataCompanias = $this->ADMINMEDICO->DataCompania();
            $titulo = "Compañias";
            include_once('view/administrador/medico/companias.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //REGISTRAR NUEVA COMPAÑIA
    public function registrarCompania()
    {
        try {
            $this->SESSION->isSession();
            $compania = new Compania();
            $compania->setnombre_compania($_POST['txt_compania']);

            $save = $this->ADMINMEDICO->insertCompania($compania);

            if ($save) {
                echo 1;
            } else {
                echo 0;
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function ActualizarCompanias()
    {
        try {
            $this->SESSION->isSession();
            $compania = new Compania();
            $compania->setnombre_compania($_POST['txt_nombre_compania']);
            $compania->setid_compania($_POST['txt_id_compania']);
            $compania->setestado($_POST['txt_estado_compania']);


            $save = $this->ADMINMEDICO->updateCompania($compania);

            if ($save) {
                header('Location:Companias');
            } else {
                header('Location:Companias');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //LISTA DE USUARIOS
    public function listarUsuarios()
    {
        try {
            $this->SESSION->isSession();
            //color de links
            if (isset($_REQUEST['ruta']) == 'listarUsuarios') {
                $ruta = 'listarUsuarios';
                $show_usuario = 'show';
                $active_usuario = 'active';
            }

            $i = 0;
            $titulo = "Lista de Usuarios";
            $dataUsuario = $this->ADMINMEDICO->DataUsuarios();
            include_once('view/administrador/usuarios/usuarios.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
