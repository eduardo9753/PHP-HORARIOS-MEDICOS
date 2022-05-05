<?php

//MODEL
include_once('model/modelGrafico.php');
include_once('utils/modelMensaje.php');
include_once('model/modelLogin.php');
include_once('model/modelAseets.php');


//DATOS
include_once('data/usuario.php');

//UITLS
include_once('utils/modelSession.php');


class ControlProfile
{

    public $MODELOGRAFICO;
    public $MSG;
    public $MODELOGIN;
    public $ASSET;
    public $SESSION;


    public function __construct()
    {
        $this->MODELOGRAFICO = new ModeloGrafico;
        $this->MSG = new ModeloMensaje();
        $this->MODELOGIN = new ModeloLogin();
        $this->ASSET = new ModeloAssets();
        $this->SESSION = new ModeloSession();
    }


    public function ProfileMedico()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $titulo = "Profile Medico";

            //color de links
            if (isset($_REQUEST['ruta']) == 'Profile') {
                $ruta = 'Profile';
            }
            include_once('view/medico/profile/profile.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    
    public function ProfileAdministrador()
    {
        try {
            //session start
            $this->SESSION->isSession();
            $titulo = "Profile Administrador";

            //color de links
            if (isset($_REQUEST['ruta']) == 'Profile') {
                $ruta = 'Profile';
            }
            include_once('view/administrador/profile/profile.php');
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function update()
    {
        try {
            //session start
            $this->SESSION->isSession();

            if (isset($_REQUEST['btn-update-profile'])) {
                $usuario = new Usuario();
                $usuario->setid_user($_SESSION['id_usuario']);
                $dataUsuario = $this->MODELOGIN->logeoById($usuario);

                if (basename($_FILES['file']['name'] == '')) {
                    $usuario->setnombreUser($this->ASSETS->CLEAR($_POST['txt_usuario']));
                    $usuario->setcontraUser($this->ASSETS->CLEAR($_POST['txt_pass']));
                    $usuario->setperfil($this->ASSETS->CLEAR($_POST['txt_perfil']));
                    $usuario->setarea($this->ASSETS->CLEAR($_POST['txt_area']));
                    $usuario->setfoto($dataUsuario->foto);
                    $usuario->setid_user($this->ASSETS->CLEAR($dataUsuario->id_usuario));
                } else {
                    $directorio = "image/";
                    $ruta = $directorio . basename($_FILES['file']['name']);
                    move_uploaded_file($_FILES['file']['tmp_name'], $ruta);
                    $usuario->setid_user($this->ASSETS->CLEAR($_SESSION['id_usuario']));
                    $usuario->setnombreUser($this->ASSETS->CLEAR($_POST['txt_usuario']));
                    $usuario->setcontraUser($this->ASSETS->CLEAR($_POST['txt_pass']));
                    $usuario->setperfil($this->ASSETS->CLEAR($_POST['txt_perfil']));
                    $usuario->setarea($this->ASSETS->CLEAR($_POST['txt_area']));
                    $usuario->setfoto($ruta);
                    //unlink($dataUsuario->foto);
                }

                $save = $this->MODELOGIN->updateLogin($usuario);

                if ($save) {
                    $_SESSION['CONTROL'] = 0;
                    $_SESSION['CONTROL'] = '';
                    $message = "SE ACTUALIZO CORRECTAMENTE TUS CREDENCIALES";
                    echo $this->MSG->success($message);
                    include_once('view/login/login.php');
                } else {
                    $_SESSION['CONTROL'] = 0;
                    $_SESSION['CONTROL'] = '';
                    $message = "NO SE ACTUALIZO CORRECTAMENTE TUS CREDENCIALES";
                    echo $this->MSG->error($message);
                    include_once('view/login/login.php');
                }
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
