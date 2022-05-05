<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloAssets
{

    public $PDO;
    public $MYSQL;

    public function __construct()
    {
        try {
            $this->PDO = new ConexionOracle(); //INICIANDO LA CONEXION A LA BD
            $this->MYSQL = new ClassConexion();
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }



    //VER COLOR DEL BOTON EN FUNCION DEL TIEMPO
    public function verColorTiempo($fecha_inicialDB = '', $fecha_finalDB = '')
    {
        try {
            date_default_timezone_set("America/Lima");

            $fecha_final = date_create($fecha_finalDB);       //fecha mayor
            $fecha_inicial = date_create($fecha_inicialDB);   //fecha menor

            $intervalo = date_diff($fecha_inicial, $fecha_final);

            $tiempo = array();

            foreach ($intervalo as $valor) :
                $tiempo[] = $valor;
            endforeach;

            $dia = $tiempo[2]; //accede al dia : [0] -> 2
            $datos = array();

            if ($dia >= 1 && $dia <= 3) {
                $color = 'btn btn-danger';
                $dia = $dia;

                $datos = [
                    "color" => $color,
                    "dia"   => $dia
                ];
            } else if ($dia >= 4 && $dia <= 10) {
                $color = 'btn btn-warning';
                $dia = $dia;

                $datos = [
                    "color" => $color,
                    "dia"   => $dia
                ];
            } else if ($dia >= 11 && $dia <= 10) {
                $color = 'btn btn-success';
                $dia = $dia;

                $datos = [
                    "color" => $color,
                    "dia"   => 0
                ];
            } else if ($dia >= 12 && $dia <= 30) {
                $color = 'btn btn-primary';
                $dia = $dia;

                $datos = [
                    "color" => $color,
                    "dia"   => $dia
                ];
            } else {
                $color = 'btn btn-primary';
                $dia = 0;

                $datos = [
                    "color" => $color,
                    "dia"   => $dia
                ];
            }

            return $datos;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //VER COLOR DEL BOTON EN FUNCION DEL TIEMPO
    public function verDiasQueQueda($fecha_vencimientoBD)
    {
        try {
            date_default_timezone_set("America/Lima");
            $fecha_actual = date('Y-m-d');

            $fecha_final = date_create($fecha_vencimientoBD); //fecha mayor
            $fecha_inicial = date_create($fecha_actual);    //fecha menor

            $intervalo = date_diff($fecha_inicial, $fecha_final);

            $tiempo = array();

            foreach ($intervalo as $valor) :
                $tiempo[] = $valor;
            endforeach;

            $dia = $tiempo[2]; //accede al dia : [0] -> 2
            $datos = array();

            if ($fecha_final < $fecha_inicial) {
                $color = 'btn btn-danger';
                $dia = 0;

                $datos = [
                    "color" => $color,
                    "dia"   => $dia
                ];
            } else {

                if ($dia >= 1 && $dia <= 3) {
                    $color = 'btn btn-danger';
                    $dia = $dia;

                    $datos = [
                        "color" => $color,
                        "dia"   => $dia
                    ];
                } else if ($dia >= 4 && $dia <= 10) {
                    $color = 'btn btn-warning';
                    $dia = $dia;

                    $datos = [
                        "color" => $color,
                        "dia"   => $dia
                    ];
                } else if ($dia >= 11 && $dia <= 10) {
                    $color = 'btn btn-success';
                    $dia = $dia;

                    $datos = [
                        "color" => $color,
                        "dia"   => 0
                    ];
                } else if ($dia >= 12 && $dia <= 30) {
                    $color = 'btn btn-primary';
                    $dia = $dia;

                    $datos = [
                        "color" => $color,
                        "dia"   => $dia
                    ];
                } else {
                    $color = 'btn btn-dark';
                    $dia = 0;

                    $datos = [
                        "color" => $color,
                        "dia"   => $dia
                    ];
                }
            }
            return $datos;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //LIMPIADOR DE CAJAS
    public function CLEAR($caja)
    {
        try {
            $texto = filter_var($caja, FILTER_SANITIZE_STRING);
            return strtoupper($texto);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    //CETEO DE CARACTERES EXTRAÑOS
    public function DELETE_ACENTO($cadena)
    {
        //Reemplazamos la A y a
        $cadena = str_replace(
            array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
            array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
            $cadena
        );

        //Reemplazamos la E y e
        $cadena = str_replace(
            array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
            array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
            $cadena
        );

        //Reemplazamos la I y i
        $cadena = str_replace(
            array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
            array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
            $cadena
        );

        //Reemplazamos la O y o
        $cadena = str_replace(
            array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
            array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
            $cadena
        );

        //Reemplazamos la U y u
        $cadena = str_replace(
            array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
            array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
            $cadena
        );

        //Reemplazamos la N, n, C y c
        $cadena = str_replace(
            array('Ñ', 'ñ', 'Ç', 'ç'),
            array('N', 'n', 'C', 'c'),
            $cadena
        );

        $cadena = str_replace(
            array('°', ' ', '-'),
            array('_', '_', '_'),
            $cadena
        );

        return $cadena;
    }

    //PINTA NUMERO DEL MES SIGUIENTE
    public function mesSiguiente()
    {
        $meses = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
        $meseSiguiente =  $meses[date('n')];
        return $meseSiguiente;
    }

    //PINTA NOMBRE DEL MES SIGUIENTE
    public function mesSiguienteCadena()
    {
        $meses = array("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
        $meseSiguiente =  $meses[date('n')];
        return $meseSiguiente;
    }

    //PINTA NOMBRE DEL MES ACTUAL
    public function mesActualCadena()
    {
        $meses = array("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
        $mesActual = $meses[date('n') - 1];
        return $mesActual;
    }

    //DEVUELVE AÑO SIGUIENTE
    public function anioSiguiente()
    {
        $anio_actual = date("Y");
        //sumo 1 año
        $anio_actual = date("Y", strtotime($anio_actual . "+ 1 year"));
        $anio_actual = Date('Y');
        $anio_actual =  $anio_actual . "-" . $anio_actual;
        return $anio_actual;
    }

    //ME DEVUELVE EL ULTIMO ID DE LA USUARIO
    public function lastIdUsuario($tabla)
    {
        try {
            $sql = "SELECT MAX(id_usuario) AS id FROM $tabla";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetch();
        } catch (Exception $th) {
            echo  $th->getMessage();
        }
    }

    //ME DEVUELVE EL ULTIMO ID DE LA TABLA MEDICO
    public function lastIdMedico($tabla)
    {
        try {
            $sql = "SELECT MAX(id_medico) AS id FROM $tabla";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetch();
        } catch (Exception $th) {
            echo  $th->getMessage();
        }
    }
}
