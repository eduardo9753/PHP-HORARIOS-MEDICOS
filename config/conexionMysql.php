<?php

class ClassConexion
{

  private $conexionBD;
  private $CONTROLADOR;
  private $SERVIDOR;
  private $BASE_DATOS;
  private $PUERTO;
  private $USUARIO;
  private $CLAVE;
  private $CODIFICACION;

  private $configuracion = [
    'drive'    => 'mysql',
    'host'     => 'localhost',
    'database' => 'calendar_SOP',
    'port'     => '3306',
    'username' => 'root',
    'password' => 'nuñez2021CJNnuñez',
    'charset'  => 'utf8'
  ];

  //CON ESTE CODIGO SE REFLEJA LOS ERRORES 
  //UTILIZALO CUANDO SEA CONVENIENTE
  private $OPT = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
  ];

  
  //constructor
  public function __construct()
  {
    $this->CONTROLADOR  = $this->configuracion['drive'];
    $this->SERVIDOR     = $this->configuracion['host'];
    $this->BASE_DATOS   = $this->configuracion['database'];
    $this->PUERTO       = $this->configuracion['port'];
    $this->USUARIO      = $this->configuracion['username'];
    $this->CLAVE        = $this->configuracion['password'];
    $this->CODIFICACION = $this->configuracion['charset'];
  }

  //Funcion conexcion
  public function ConectarBD()
  {
    try {
      $url = "{$this->CONTROLADOR}:host={$this->SERVIDOR}:{$this->PUERTO};" . "dbname={$this->BASE_DATOS};charset={$this->CODIFICACION}";

      //conexion a la base
      $this->conexionBD = new PDO($url, $this->USUARIO, $this->CLAVE);
      $this->conexionBD->exec("set name utf8");
      //Mensaje
      return $this->conexionBD;
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}
