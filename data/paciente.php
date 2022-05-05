<?php

class Paciente
{

    private $ID_NHC;
    private $NOMBRE_PAC;
    private $PATERNO;
    private $MATERNO;
    private $SEXO_PAC;
    private $DOCUMENTO;
    private $NOMBRE_PROFESIONAL;
    private $NOMBRE_ESPECIALIDAD;
    private $PRIMER_NOMBRE;
    private $SEGUNDO_NOMBRE;
    private $FECHA_CHEKLIST;
    private $FECHA_RECUPERACION;
    private $FECHA_SALIDA;
    private $FECHA_REAL;
    private $ESTADO;
    private $ESTADO_BAJA;
    private $id_usuario;


    public function __construct()
    {
        $this->ID_NHC = "";
        $this->NOMBRE_PAC = "";
        $this->PATERNO = "";
        $this->MATERNO = "";
        $this->DOCUMENTO = "";
        $this->SEXO_PAC = "";
        $this->NOMBRE_PROFESIONAL = "";
        $this->NOMBRE_ESPECIALIDAD = "";
        $this->PRIMER_NOMBRE = "";
        $this->SEGUNDO_NOMBRE = "";
        $this->FECHA_CHEKLIST = "";
        $this->FECHA_RECUPERACION = "";
        $this->FECHA_REAL = "";
        $this->ESTADO = "";
        $this->ESTADO_BAJA = "";
        $this->id_usuario = "";
    }

    function setDOCUMENTO($DOCUMENTO)
    {
        $this->DOCUMENTO = $DOCUMENTO;
    }
    function getDOCUMENTO()
    {
        return $this->DOCUMENTO;
    }

    function setSEXO_PAC($SEXO_PAC)
    {
        $this->SEXO_PAC = $SEXO_PAC;
    }
    function getSEXO_PAC()
    {
        return $this->SEXO_PAC;
    }
    function setNOMBRE_PROFESIONAL($NOMBRE_PROFESIONAL)
    {
        $this->NOMBRE_PROFESIONAL = $NOMBRE_PROFESIONAL;
    }
    function getNOMBRE_PROFESIONAL()
    {
        return $this->NOMBRE_PROFESIONAL;
    }

    function setNOMBRE_ESPECIALIDAD($NOMBRE_ESPECIALIDAD)
    {
        $this->NOMBRE_ESPECIALIDAD = $NOMBRE_ESPECIALIDAD;
    }
    function getNOMBRE_ESPECIALIDAD()
    {
        return $this->NOMBRE_ESPECIALIDAD;
    }

    function setID_NHC($ID_NHC)
    {
        $this->ID_NHC = $ID_NHC;
    }
    function getID_NHC()
    {
        return $this->ID_NHC;
    }

    function setESTADO_BAJA($ESTADO_BAJA)
    {
        $this->ESTADO_BAJA = $ESTADO_BAJA;
    }
    function getESTADO_BAJA()
    {
        return $this->ESTADO_BAJA;
    }

    function setNOMBRE_PAC($NOMBRE_PAC)
    {
        $this->NOMBRE_PAC = $NOMBRE_PAC;
    }
    function getNOMBRE_PAC()
    {
        return $this->NOMBRE_PAC;
    }

    function setPATERNO($PATERNO)
    {
        $this->PATERNO = $PATERNO;
    }
    function getPATERNO()
    {
        return $this->PATERNO;
    }

    function setMATERNO($MATERNO)
    {
        $this->MATERNO = $MATERNO;
    }
    function getMATERNO()
    {
        return $this->MATERNO;
    }

    function setPRIMER_NOMBRE($PRIMER_NOMBRE)
    {
        $this->PRIMER_NOMBRE = $PRIMER_NOMBRE;
    }
    function getPRIMER_NOMBRE()
    {
        return $this->PRIMER_NOMBRE;
    }

    function setSEGUNDO_NOMBRE($SEGUNDO_NOMBRE)
    {
        $this->SEGUNDO_NOMBRE = $SEGUNDO_NOMBRE;
    }
    function getSEGUNDO_NOMBRE()
    {
        return $this->SEGUNDO_NOMBRE;
    }


    function setFECHA_CHEKLIST($FECHA_CHEKLIST)
    {
        $this->FECHA_CHEKLIST = $FECHA_CHEKLIST;
    }
    function getFECHA_CHEKLIST()
    {
        return $this->FECHA_CHEKLIST;
    }


    function setFECHA_RECUPERACION($FECHA_RECUPERACION)
    {
        $this->FECHA_RECUPERACION = $FECHA_RECUPERACION;
    }
    function getFECHA_RECUPERACION()
    {
        return $this->FECHA_RECUPERACION;
    }

    function setFECHA_REAL($FECHA_REAL)
    {
        $this->FECHA_REAL = $FECHA_REAL;
    }
    function getFECHA_REAL()
    {
        return $this->FECHA_REAL;
    }

    function setFECHA_SALIDA($FECHA_SALIDA)
    {
        $this->FECHA_SALIDA = $FECHA_SALIDA;
    }
    function getFECHA_SALIDA()
    {
        return $this->FECHA_SALIDA;
    }

    function setESTADO($ESTADO)
    {
        $this->ESTADO = $ESTADO;
    }
    function getESTADO()
    {
        return $this->ESTADO;
    }

    function setid_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    function getid_usuario()
    {
        return $this->id_usuario;
    }
}
