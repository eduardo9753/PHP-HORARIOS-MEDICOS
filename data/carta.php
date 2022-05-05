<?php

class Carta
{

    private $id;
    private $num_gestion_carta;
    private $num_carta;
    private $detalle_carta;
    private $fecha_ingreso;
    private $fecha_vencimiento;
    private $entidad;
    private $tipo_carta;
    private $origen_carta;
    private $nombre_paciente;
    private $motivo_carta;
    private $documento_carta;
    private $fecha_envio_corp;
    private $fecha_respuesta_corp;
    private $indicacion_corp;
    private $canal_respuesta;
    private $fecha_respuesta;
    private $fecha_conformidad;
    private $observaciones;
    private $estado;
    private $flag;
    private $id_usuario;

    public function __construct()
    {
        $this->id = '';
        $this->num_gestion_carta = '';
        $this->num_carta = '';
        $this->detalle_carta = '';
        $this->fecha_ingreso = '';
        $this->fecha_vencimiento = '';
        $this->entidad = '';
        $this->tipo_carta = '';
        $this->origen_carta = '';
        $this->nombre_paciente = '';
        $this->motivo_carta = '';
        $this->documento_carta = '';
        $this->fecha_envio_corp = '';
        $this->fecha_respuesta_corp = '';
        $this->indicacion_corp = '';
        $this->canal_respuesta = '';
        $this->fecha_respuesta = '';
        $this->fecha_conformidad = '';
        $this->observaciones = '';
        $this->estado = '';
        $this->flag = '';
        $this->id_usuario = '';
    }


    function setid($id)
    {
        $this->id = $id;
    }
    function getid()
    {
        return $this->id;
    }



    function setnum_gestion_carta($num_gestion_carta)
    {
        $this->num_gestion_carta = $num_gestion_carta;
    }
    function getnum_gestion_carta()
    {
        return $this->num_gestion_carta;
    }


    function setnum_carta($num_carta)
    {
        $this->num_carta = $num_carta;
    }
    function getnum_carta()
    {
        return $this->num_carta;
    }


    function setdetalle_carta($detalle_carta)
    {
        $this->detalle_carta = $detalle_carta;
    }
    function getdetalle_carta()
    {
        return $this->detalle_carta;
    }

    function setfecha_ingreso($fecha_ingreso)
    {
        $this->fecha_ingreso = $fecha_ingreso;
    }
    function getfecha_ingreso()
    {
        return $this->fecha_ingreso;
    }

    function setfecha_vencimiento($fecha_vencimiento)
    {
        $this->fecha_vencimiento = $fecha_vencimiento;
    }
    function getfecha_vencimiento()
    {
        return $this->fecha_vencimiento;
    }

    function setentidad($entidad)
    {
        $this->entidad = $entidad;
    }
    function getentidad()
    {
        return $this->entidad;
    }

    function settipo_carta($tipo_carta)
    {
        $this->tipo_carta = $tipo_carta;
    }
    function gettipo_carta()
    {
        return $this->tipo_carta;
    }

    function setorigen_carta($origen_carta)
    {
        $this->origen_carta = $origen_carta;
    }
    function getorigen_carta()
    {
        return $this->origen_carta;
    }

    function setnombre_paciente($nombre_paciente)
    {
        $this->nombre_paciente = $nombre_paciente;
    }
    function getnombre_paciente()
    {
        return $this->nombre_paciente;
    }

    function setmotivo_carta($motivo_carta)
    {
        $this->motivo_carta = $motivo_carta;
    }
    function getmotivo_carta()
    {
        return $this->motivo_carta;
    }

    function setdocumento_carta($documento_carta)
    {
        $this->documento_carta = $documento_carta;
    }
    function getdocumento_carta()
    {
        return $this->documento_carta;
    }

    function setfecha_envio_corp($fecha_envio_corp)
    {
        $this->fecha_envio_corp = $fecha_envio_corp;
    }
    function getfecha_envio_corp()
    {
        return $this->fecha_envio_corp;
    }


    function setfecha_respuesta_corp($fecha_respuesta_corp)
    {
        $this->fecha_respuesta_corp = $fecha_respuesta_corp;
    }
    function getfecha_respuesta_corp()
    {
        return $this->fecha_respuesta_corp;
    }

    function setindicacion_corp($indicacion_corp)
    {
        $this->indicacion_corp = $indicacion_corp;
    }
    function getindicacion_corp()
    {
        return $this->indicacion_corp;
    }

    function setcanal_respuesta($canal_respuesta)
    {
        $this->canal_respuesta = $canal_respuesta;
    }
    function getcanal_respuesta()
    {
        return $this->canal_respuesta;
    }

    function setfecha_respuesta($fecha_respuesta)
    {
        $this->fecha_respuesta = $fecha_respuesta;
    }
    function getfecha_respuesta()
    {
        return $this->fecha_respuesta;
    }

    function setfecha_conformidad($fecha_conformidad)
    {
        $this->fecha_conformidad = $fecha_conformidad;
    }
    function getfecha_conformidad()
    {
        return $this->fecha_conformidad;
    }

    function setobservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }
    function getobservaciones()
    {
        return $this->observaciones;
    }

    function setflag($flag)
    {
        $this->flag = $flag;
    }
    function getflag()
    {
        return $this->flag;
    }

    function setestado($estado)
    {
        $this->estado = $estado;
    }
    function getestado()
    {
        return $this->estado;
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
