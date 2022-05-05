<?php

include_once('config/conexionMysql.php');

class ModeloAdministradorMedico
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

    //DATA DE TODOS LOS MEDICOS
    public function dataMedico()
    {
        try {
            $sql = 'SELECT * FROM medico m 
            INNER JOIN consultorio c ON c.id_consultorio = m.id_consultorio
            INNER JOIN compania com ON com.id_compania = m.id_compania
            INNER JOIN estado_medico estame ON estame.id_estado_medico = m.id_estado_medico';
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ESTADO DE LOS MEDICOS 
    public function DataEstadoMedico()
    {
        try {
            $sql = 'SELECT * FROM estado_medico';
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //INSERT DATA NUEVO MEDICO
    public function insertMedico(Medico $medico)
    {
        try {
            $sql = "INSERT INTO medico(nombre_medico,codigo_medico,id_consultorio,id_estado_medico,id_compania,id_usuario,foto) VALUES (?,?,?,?,?,?,?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $medico->getnombre_medico(),
                    $medico->getcodigo_medico(),
                    $medico->getid_consultorio(),
                    $medico->getid_estado_medico(),
                    $medico->getid_compania(),
                    $medico->getid_usuario(),
                    $medico->getfoto()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //DATA DE LOS CONSULTORIO
    public function dataConsultorio()
    {
        try {
            $sql = 'SELECT * FROM consultorio';
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //INSERT DATA NUEVO CONSULTORIO
    public function insertConsultorio(Consultorio $consultorio)
    {
        try {
            $sql = "INSERT INTO `consultorio` (`nombre_consultorio`) VALUES (?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $consultorio->getnombre_consultorio()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZAR CONSULTORIO
    public function updateConsultorio(Consultorio $consultorio)
    {
        try {
            $sql = "UPDATE consultorio SET nombre_consultorio=?,
            estado=? WHERE id_consultorio=?";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $consultorio->getnombre_consultorio(),
                    $consultorio->getestado(),
                    $consultorio->getid_consultorio()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //DATA DE LAS COMPAÑIAS
    public function DataCompania()
    {
        try {
            $sql = 'SELECT * FROM compania';
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //INSERT DATA NUEVA COMPAÑIA
    public function insertCompania(Compania $compania)
    {
        try {
            $sql = "INSERT INTO `compania` (`nombre_compania`) VALUES (?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $compania->getnombre_compania()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTUALIZAR DATA COMPAÑIA
    public function updateCompania(Compania $compania)
    {
        try {
            $sql = "UPDATE compania SET nombre_compania=?,
                           estado=? WHERE id_compania=?";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $compania->getnombre_compania(),
                    $compania->getestado(),
                    $compania->getid_compania()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //DATA DE LAS ESPECIALIDADES
    public function DataEspecialidades()
    {
        try {
            $sql = 'SELECT * FROM especialidad';
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //INSERT DATA NUEVA ESPECIALIDAD
    public function insertEspecialidad(Especialidad $especialidad)
    {
        try {
            $sql = "INSERT INTO `especialidad` (`nombre_especialidad`) VALUES (?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $especialidad->getnombre_especialidad()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //ACTULIZAR ESPECIALIDAD
    public function updateEspecialidad(Especialidad $especialidad)
    {
        try {
            $sql = "UPDATE especialidad SET nombre_especialidad=?,
            estado=? WHERE id_especialidad=?";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $especialidad->getnombre_especialidad(),
                    $especialidad->getestado(),
                    $especialidad->getid_especialidad()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //INSERT NUEVO USUARIO
    public function insertUsuario(Usuario $usuario)
    {
        try {
            $sql = "INSERT INTO usuario(nombre_usuario,contra_usuario,perfil,foto) VALUES(?,?,?,?)";
            $stm = $this->PDO->ConectarBD()->prepare($sql)->execute(
                array(
                    $usuario->getnombreUser(),
                    $usuario->getcontraUser(),
                    $usuario->getperfil(),
                    $usuario->getfoto()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //LISTA DE USUARIOS
    public function DataUsuarios()
    {
        try {
            $sql = 'SELECT m.id_medico, m.nombre_medico,esta.estado,u.id_usuario,
              u.nombre_usuario,u.contra_usuario, u.perfil
              FROM medico m 
              INNER JOIN usuario u ON m.id_usuario = u.id_usuario
              INNER JOIN estado_medico esta ON m.id_estado_medico = esta.id_estado_medico
              ORDER BY m.id_medico ASC';
            $stm = $this->PDO->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //INSERT MUCHOS A MUCHOS ESPECIALIDAD - MEDICO
    public function insertEspecialidadMedico(Especialidad $especialidad, Medico $medico)
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
}
