<?php

include_once('config/conexionOracle.php');
include_once('config/conexionMysql.php');

class ModeloMensaje
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



  /****************************************MESAGES DE ALERTAS PARA MOSTRARLE AL USUARIO***********************/
  public function success($message = "")
  {
    $resultado = '
        <div class="alert alert-success alert-dismissible fade show mover-mensage" role="alert">
        <strong>Message !</strong> ' . $message . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    echo $resultado;
  }

  public function error($message = "")
  {
    $resultado = '
        <div class="alert alert-danger alert-dismissible fade show mover-mensage" role="alert">
        <strong>Message !</strong> ' . $message . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    echo $resultado;
  }
  /************************************************************************************************************/



  //REEMPLAZAR CARACTER EXTRAÑOS/SIGNOS/TILDES
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
      array('Ñ', 'ñ', 'Ç', 'ç', '?'),
      array('N', 'n', 'C', 'c', 'Ñ'),
      $cadena
    );
    return $cadena;
  }
}
