<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');
include_once('utils/modelMensaje.php');

class ModeloSession
{

    public $PDO;
    public $MYSQL;
    public $MSG;

    public function __construct()
    {
        try {
            $this->PDO = new ConexionOracle(); //INICIANDO LA CONEXION A LA BD
            $this->MYSQL = new ClassConexion();
            $this->MSG = new ModeloMensaje();
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }



    /*****************************************************************LOGEO DEL USUARIO*******************************************************/
    public function isSession()
    {
        try {
            session_start();
            if (empty($_SESSION['CONTROL']) || $_SESSION['CONTROL'] !== 1) {
                $message = "INGRESE SUS CREDENCIALES POR FAVOR!!";
                echo $this->MSG->success($message);
                include_once('view/login/login.php');
                exit;
            }
        } catch (Exception $th) {
            throw $th;
        }
    }

    public function mantenimiento()
    {

        try {
            include_once('view/login/login.php');
            exit;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //FUNCION QUE ME RETORNA EL PRIMER Y ULTIMO DIA 
    public function DiaPrimerUltimo($fecha)
    {
        try {
            $fecha = date_create($fecha);
            $fecha_ = date_format($fecha, 'd');
            return $fecha_;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //FUNCION QUE ME RETORNA EL DIA Y AÑO Y MES ACTUAL
    public function AnioMesActual($fecha)
    {
        try {
            $fecha = date_create($fecha);
            $fecha_ = date_format($fecha, 'Y-m');
            return $fecha_;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //FUNCION QUE RETORNA MINUTOS
    public function horasMinutos($fecha)
    {
        try {
            $fecha = date_create($fecha);
            $fecha_ = date_format($fecha, 'H:i:s');
            return $fecha_;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //FORMATO DE FECHA - HORAS - MINUTOS
    public function formatFecha($fecha)
    {
        try {
            $fecha = date_create($fecha);
            $fecha_ = date_format($fecha, 'Y-m-d H:i:s');
            return $fecha_;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //FORMATO DE HORA PARA DATETIME-LOCAL DE LOS INPUT
    public function formatFechaDateTimeLocal($fecha)
    {
        try {
            $fecha = date_create($fecha);
            $fecha_ = date_format($fecha, 'Y-m-dTH:i:s');
            $fecha_ = str_replace(
                array('PET'), //lo que hay
                array('T'),  //lo que cambia
                $fecha_
            );
            return $fecha_;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //FUNCION QUE RETORNA MES ACTUAL

}
