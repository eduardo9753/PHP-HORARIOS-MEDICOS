<?php


include_once('config/conexionMysql.php');

class ModeloEventoAdministrador
{
    public $PDO;

    public function __construct()
    {
        try {
            $this->PDO = new ClassConexion(); //INICIANDO LA CONEXION A LA BD
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //DATOS DE LOS MEDICOS QUE HAN REGISTRO SU HORARIO POR MES Y ESTADO
    public function dataMedicoEstado($estado, $mesActual)
    {
        try {
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
            WHERE DATE_FORMAT(e.`START`, '%Y-%m') = ? AND esta.id_estado IN(?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $mesActual,
                $estado
            ));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //DATA HORARIO POR ID DEL MEDICO Y MES ELEGIDO PARA PINTARLO EN FULL CALENDAR
    public function allEventByIdAndMes($id_medico, $mes_actual, $estado)
    {
        try {
            $sql = "SELECT e.id , 
            e.title AS 'title', 
            e.descripcion,
            me.id_medico AS 'id_medico',
            me.nombre_medico AS 'medico',
            e.color AS 'backgroundColor',
            e.textColor AS 'textColor',
            e.`allDay` AS 'allDay',
            e.`START` AS 'start',
            e.`end` AS 'end',
            esta.id_estado AS 'id_estado',
            esta.estado AS 'estado'
            FROM evento e 
            INNER JOIN medico me ON me.id_medico = e.id_medico
            INNER JOIN estado esta ON esta.id_estado = e.id_estado
            WHERE e.id_medico = ? AND DATE_FORMAT(e.`START`, '%Y-%m') = ? 
			AND esta.id_estado IN (?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $id_medico,
                $mes_actual,
                $estado
            ));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //PARA RECORRER EL FOREACH Y ACTUALIZAR LOS HORARIOS DE LOS MEDICOS
    public function recorridoEventoMesByIdMedico($id_medico, $mes_actual, $estado_inicial)
    {
        try {
            $sql = "SELECT * FROM evento e
            WHERE DATE_FORMAT(e.`START`, '%Y-%m') = ?
            AND e.id_estado IN(?)
            AND e.id_medico IN(?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute(array(
                $mes_actual,
                $estado_inicial,
                $id_medico,
            ));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //APROBAR LOS HORARIOS REGISTRADOS DE LOS MEDICOS 
    public function updateEventoMesByIdMedicoEstado($id_medico, $mes_actual, $color, $estado_inicial, $estado_final)
    {
        try {
            $sql = "UPDATE evento e SET e.id_estado = ?,
                    e.color = ?
                    WHERE DATE_FORMAT(e.`START`, '%Y-%m') = ? 
                    AND e.id_estado IN(?)
                    AND e.id_medico IN(?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(array(
                $estado_final,
                $color,
                $mes_actual,
                $estado_inicial,
                $id_medico
            ));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //DATA MEDICO POR ID
    public function medicoById($id_medico)
    {
        try {
            $sql = "SELECT * FROM medico m WHERE m.id_medico = ?";
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute(array($id_medico));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ELIMINAR EVENTO POR ID
    public function deleteEventoADM($id_evento)
    {
        try {
            $sql = "DELETE FROM evento WHERE id = ?";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(array($id_evento));
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
