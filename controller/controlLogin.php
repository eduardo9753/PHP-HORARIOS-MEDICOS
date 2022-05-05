<?php

//MODEL
include_once('model/modelLogin.php');

//DATOS
include_once('data/usuario.php');


class ControlLogin
{

    public $MODEL;

    public function __construct()
    {
        $this->MODEL = new ModeloLogin();
    }


    
    /*********************************************************************LOGEO DEL ADMIN********************************************************/
    public function Login()
    {
        try {
            /*  if(isset($_REQUEST['btn-login'])){ */
            $login = new Usuario();
            $login->setnombreUser($_POST['txt_usuario']);
            $login->setcontraUser($_POST['txt_contra']);

            $acceso = $this->MODEL->logeo($login);

            if ($acceso) {
                session_start();
                $_SESSION["id_medico"] = $acceso->id_medico;
                $_SESSION["id_usuario"] = $acceso->id_usuario;
                $_SESSION["nombre_usuario"] = $acceso->nombre_usuario;
                $_SESSION["contra_usuario"] = $acceso->contra_usuario;
                $_SESSION["perfil"] = $acceso->perfil;
                $_SESSION["area_usuario"] = $acceso->area_usuario;
                $_SESSION["foto"] = $acceso->foto;
                $_SESSION["nombre_medico"] = $acceso->nombre_medico;
                $_SESSION["estado"] = $acceso->estado;
                $_SESSION["CONTROL"] = 1;

                if ($_SESSION["estado"] == 'CESADO') {
                    echo 3;
                } else if ( $_SESSION["perfil"] == 'ADMIN' ) {
                    echo 1;
                } else if ($_SESSION["perfil"] == 'MEDICO') {
                    echo 2;
                }
            } else {
                echo 0;
            }
            /* }*/
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
