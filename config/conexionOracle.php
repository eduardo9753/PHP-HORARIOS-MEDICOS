<?php


class ConexionOracle
{
    private $conexionBD;
    private $CONTROLADOR;
    private $SERVIDOR;
    private $USUARIO;
    private $CLAVE;


    private $configuracion = [
        'drive'    => 'oci',
        'host'     => 'PRODUCCIONSN',
        'username' => 'cagarcia',
        'password' => 'garci123++',
    ];

    private $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    ];

    
    public function __construct()
    {
        $this->CONTROLADOR  = $this->configuracion['drive'];
        $this->SERVIDOR     = $this->configuracion['host'];
        $this->USUARIO      = $this->configuracion['username'];
        $this->CLAVE        = $this->configuracion['password'];
    }

    public function ConectarOracle()
    {
        try {
            $url = "{$this->CONTROLADOR}:dbname={$this->SERVIDOR}";
            $this->conexionBD = new PDO($url, $this->USUARIO, $this->CLAVE, $this->opt);
            return $this->conexionBD;
        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
    }
}
