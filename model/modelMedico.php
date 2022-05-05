<?php

include_once('config/conexionMysql.php');

class ModeloMedico
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

    //DATA DE UN EVENTO POR ID
    public function eventoById(Evento $evento)
    {
        try {
            $sql = 'SELECT e.id , 
            e.title AS "title", 
            e.descripcion,
            me.id_medico AS "id_medico",
            me.nombre_medico AS "medico",
            e.color AS "backgroundColor",
            e.textColor AS "textColor",
            e.`allDay` AS "allDay",
            e.`START` AS "start",
            e.`end` AS "end",
            esta.id_estado AS "id_estado",
            esta.estado AS "estado"
            FROM evento e 
            INNER JOIN medico me ON me.id_medico = e.id_medico
            INNER JOIN estado esta ON esta.id_estado = e.id_estado
            WHERE e.id=?';
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute(array($evento->getid()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //FUNCION NO USADA
    public function updateMoverEvento(Evento $evento)
    {
        try {
            $sql = "UPDATE evento SET title=?,
                  descripcion=?,
                  id_medico=?,
                  color=?,
                  textColor=?,
                  START=?,
                  END=? WHERE id =?";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $evento->gettitle(),
                    $evento->getdescripcion(),
                    $evento->getid_medico(),
                    $evento->getcolor(),
                    $evento->gettextColor(),
                    $evento->getstart(),
                    $evento->getend(),
                    $evento->getid()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZAR FECHA INICIO Y FINAL DE UN SOLO EVENTO POR SU ID
    public function updateEvento(Evento $evento)
    {
        try {
            $sql = "UPDATE evento SET descripcion=?,
                  START=?,
                  END=? WHERE id = ?";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $evento->getdescripcion(),
                    $evento->getstart(),
                    $evento->getend(),
                    $evento->getid()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //REGIATRAR EVENTO CON EL BUCLE WHILE
    public function saveEvento(Evento $evento)
    {
        try {
            $sql = "INSERT INTO evento(title,descripcion,id_medico,color,textColor,START,end,allDay,id_estado) 
            VALUES(?,?,?,?,?,?,?,?,?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $evento->gettitle(),
                    $evento->getdescripcion(),
                    $evento->getid_medico(),
                    $evento->getcolor(),
                    $evento->gettextColor(),
                    $evento->getstart(),
                    $evento->getend(),
                    $evento->getallDay(),
                    $evento->getid_estado()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //DATA DEL HORARIO POR EL ID DEL MEDICO
    public function allEvent($id_medico)
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
            WHERE me.id_medico = '$id_medico'";
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //DATA DE UN MEDICO POR ID 
    public function allMedicosById($id_medico)
    {
        try {
            $sql = "SELECT * FROM medico m WHERE m.id_estado_medico IN ('1','4')
                    AND m.id_medico = '$id_medico'";
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); //SE USO PARA EL RECORRIDO DEL FOREACH EN "registrarEvento.php"
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ELIMINAR EVENTO
    public function deleteEventoMedico($id_evento)
    {
        try {
            $sql = "DELETE FROM evento WHERE id = '$id_evento'";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute();
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //LISTA DE ESPECILIDAD - MEDICO POR ID
    public function dataEspecialidadMedicoBYId(Medico $medico)
    {
        try {
            $sql = "SELECT * FROM especialidad_medico espeme
                    INNER JOIN especialidad e ON e.id_especialidad = espeme.id_especialidad
                    INNER JOIN medico m ON espeme.id_medico = m.id_medico
                    WHERE espeme.id_medico =?";
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute(array($medico->getid_medico()));
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //INSERT MUCHOS A MUCHOS ESPECIALIDAD - MEDICO
    public function insertEspecialidadMedico(Especialidad $especialidad,Medico $medico)
    {
        try {
            $sql = "INSERT INTO especialidad_medico(id_medico,id_especialidad) VALUES(?,?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $medico->getid_medico(),
                    $especialidad->getid_especialidad(),
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZA ESPECIALIDAD MEDICO
    public function updateEspecialidadMedico(EspecialidadMedico $especialidadMedico)
    {
        try {
            $sql = "UPDATE especialidad_medico SET id_especialidad =? WHERE id=?";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $especialidadMedico->getid_especialidad(),
                    $especialidadMedico->getid()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}
