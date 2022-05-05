<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloSop
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

   
    //DATA PACIENTE ESTADOS
    public function allPaciente()
    {
        try {
            $diaActual = date("d");
            $sql = "SELECT * FROM tiempo_sop TSOP WHERE TSOP.ESTADO IN ('1','2','3')
            AND DATE_FORMAT(TSOP.FECHA_REAL,'%d') = '$diaActual' 
            ORDER BY TSOP.FECHA_CHEKLIST ASC";
            //$sql = "SELECT * FROM tiempo_sop TSOP WHERE TSOP.ESTADO IN ('1','2','3')";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //PACIENTE FALLECIDO O CRITICO
    public function pacienteCritico(Paciente $paciente)
    {
        try {
            $sql = "UPDATE TIEMPO_SOP SET ESTADO=? WHERE ID_NHC=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $paciente->getESTADO(),
                $paciente->getID_NHC()
            ));
            return  $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }






    /****************************************************************************************************/

     //DATA PACIENTE ESTADOS
     public function compania()
     {
         try {
             $diaActual = date("d");
             $sql = "SELECT * FROM compania";
             //$sql = "SELECT * FROM tiempo_sop TSOP WHERE TSOP.ESTADO IN ('1','2','3')";
             $stm = $this->MYSQL->ConectarBD()->prepare($sql);
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
         } catch (Exception $th) {
             echo $th->getMessage();
         }
     }

     public function medicos()
     {
         try {
             $diaActual = date("d");
             $sql = "SELECT * FROM medico";
             //$sql = "SELECT * FROM tiempo_sop TSOP WHERE TSOP.ESTADO IN ('1','2','3')";
             $stm = $this->MYSQL->ConectarBD()->prepare($sql);
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_OBJ);
         } catch (Exception $th) {
             echo $th->getMessage();
         }
     }

     public function consultorioMedico($nombre_compania, $id_compania)
    {
        try {
            $sql = "UPDATE medico m SET m.id_compania = '$id_compania' WHERE id_compania = '$nombre_compania'";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $id_compania,
                $nombre_compania
            ));
            return  $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
