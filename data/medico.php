<?php

class Medico
{
    private $id_medico;
    private $nombre_medico;
    private $codigo_medico;
    private $id_consultorio;
    private $id_estado_medico;
    private $id_compania;
    private $id_usuario;
    private $foto;

    public function __construct()
    {
        $this->id_medico = '';
        $this->nombre_medico = '';
        $this->codigo_medico = '';
        $this->id_consultorio = '';
        $this->id_estado_medico = '';
        $this->id_compania = '';
        $this->id_usuario = '';
        $this->foto = '';
    }


    function setid_medico($id_medico)
    {
        $this->id_medico = $id_medico;
    }
    function getid_medico()
    {
        return $this->id_medico;
    }

    function setnombre_medico($nombre_medico)
    {
        $this->nombre_medico = $nombre_medico;
    }
    function getnombre_medico()
    {
        return $this->nombre_medico;
    }

    function setcodigo_medico($codigo_medico)
    {
        $this->codigo_medico = $codigo_medico;
    }
    function getcodigo_medico()
    {
        return $this->codigo_medico;
    }


    function setid_consultorio($id_consultorio)
    {
        $this->id_consultorio = $id_consultorio;
    }
    function getid_consultorio()
    {
        return $this->id_consultorio;
    }

    function setid_estado_medico($id_estado_medico)
    {
        $this->id_estado_medico = $id_estado_medico;
    }
    function getid_estado_medico()
    {
        return $this->id_estado_medico;
    }

    function setid_compania($id_compania)
    {
        $this->id_compania = $id_compania;
    }
    function getid_compania()
    {
        return $this->id_compania;
    }

    function setid_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    function getid_usuario()
    {
        return $this->id_usuario;
    }

    function setfoto($foto)
    {
        $this->foto = $foto;
    }
    function getfoto()
    {
        return $this->foto;
    }
}
