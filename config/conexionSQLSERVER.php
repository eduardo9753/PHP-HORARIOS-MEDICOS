<?php


class ConexionSqlServer
{
    private $conexionBD;
    private $CONTROLADOR;
    private $SERVIDOR;
    private $BASE_DATOS;
    private $PUERTO;
    private $USUARIO;
    private $CLAVE;


    private $configuracion = [
        'drive'    => 'sqlsrv',
        'host'     => '192.1.0.69', //DESKTOP-QO3558E
        'database' => 'labcore',
        'port'     => '1433',
        'username' => 'labcore',
        'password' => 'labcore',
    ];

    private $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    ];

    
    public function __construct()
    {
        $this->CONTROLADOR  = $this->configuracion['drive'];
        $this->SERVIDOR     = $this->configuracion['host'];
        $this->BASE_DATOS   = $this->configuracion['database'];
        $this->PUERTO       = $this->configuracion['port'];
        $this->USUARIO      = $this->configuracion['username'];
        $this->CLAVE        = $this->configuracion['password'];
    }

    public function ConectarSqlServer()
    {
        try {
            $url = "{$this->CONTROLADOR}:Server={$this->SERVIDOR},{$this->PUERTO};Database={$this->BASE_DATOS}";
            $this->conexionBD = new PDO($url, $this->USUARIO, $this->CLAVE, $this->opt);

            //$c = new PDO("sqlsrv:Server=localhost;Database=testdb", "NombreUsuario", "Contraseña");
            return $this->conexionBD;
        } catch (PDOException $e) {
            echo ($e->getMessage());
        }
    }
}
