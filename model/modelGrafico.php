<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloGrafico
{

    public $PDO;
    public $MYSQL;

    public function __construct()
    {
        try {
            $this->PDO = new ConexionOracle(); //INICIANDO LA CONEXION A LA BD
            $this->MYSQL = new ClassConexion();
        } catch (Exception $th) {
            throw $th;
        }
    }
 
    /*$sql = "SELECT * FROM tiempo_sop TSOP WHERE TSOP.ESTADO IN ('1','2','3')
    AND DATE_FORMAT(TSOP.FECHA_REAL,'%d') = '$diaActual' 
    ORDER BY TSOP.FECHA_CHEKLIST ASC";*/

    public function countRegistrados()
    {
        try {
            $mesActual = date("Y-m");
            $sql = "SELECT DISTINCT m.nombre_medico,
            m.codigo_medico,
            c.nombre_consultorio,
            m.codigo_medico,
            m.id_medico,
            c.nombre_consultorio,
            esta.estado,
            esta.id_estado,
            e.id_medico   
            FROM evento e
            INNER JOIN medico m ON m.id_medico = e.id_medico 
            INNER JOIN estado esta ON esta.id_estado = e.id_estado
            INNER JOIN consultorio c ON c.id_consultorio = m.id_consultorio
            WHERE DATE_FORMAT(e.`START`, '%Y-%m') = '$mesActual' AND esta.id_estado IN('1')";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function countAprovados()
    {
        try {
            $mesActual = date("Y-m");
            $sql = "SELECT DISTINCT m.nombre_medico,
            m.codigo_medico,
            c.nombre_consultorio,
            m.codigo_medico,
            m.id_medico,
            c.nombre_consultorio,
            esta.estado,
            esta.id_estado,
            e.id_medico   
            FROM evento e
            INNER JOIN medico m ON m.id_medico = e.id_medico 
            INNER JOIN estado esta ON esta.id_estado = e.id_estado
            INNER JOIN consultorio c ON c.id_consultorio = m.id_consultorio
            WHERE DATE_FORMAT(e.`START`, '%Y-%m') = '$mesActual' AND esta.id_estado IN('2')";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countRechazados()
    {
        try {
            $mesActual = date("Y-m");
            $sql = "SELECT DISTINCT m.nombre_medico,
            m.codigo_medico,
            c.nombre_consultorio,
            m.codigo_medico,
            m.id_medico,
            c.nombre_consultorio,
            esta.estado,
            esta.id_estado,
            e.id_medico   
            FROM evento e
            INNER JOIN medico m ON m.id_medico = e.id_medico 
            INNER JOIN estado esta ON esta.id_estado = e.id_estado
            INNER JOIN consultorio c ON c.id_consultorio = m.id_consultorio
            WHERE DATE_FORMAT(e.`START`, '%Y-%m') = '$mesActual' AND esta.id_estado IN('3')";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function countTotal()
    {
        try {
            $mesActual = date("Y-m");
            $sql = "SELECT DISTINCT m.nombre_medico,
            m.codigo_medico,
            c.nombre_consultorio,
            m.codigo_medico,
            m.id_medico,
            c.nombre_consultorio,
            esta.estado,
            esta.id_estado,
            e.id_medico   
            FROM evento e
            INNER JOIN medico m ON m.id_medico = e.id_medico 
            INNER JOIN estado esta ON esta.id_estado = e.id_estado
            INNER JOIN consultorio c ON c.id_consultorio = m.id_consultorio
            WHERE DATE_FORMAT(e.`START`, '%Y-%m') = '$mesActual' AND esta.id_estado IN('1','2','3')";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->rowCount();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
