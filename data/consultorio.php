<?php

class Consultorio
{
    private $id_consultorio;
    private $nombre_consultorio;
    private $estado;

    public function __construct()
    {
        $this->id_consultorio = '';
        $this->nombre_consultorio = '';
        $this->estado = '';
    }

    function setid_consultorio($id_consultorio)
    {
        $this->id_consultorio = $id_consultorio;
    }
    function getid_consultorio()
    {
        return $this->id_consultorio;
    }

    function setestado($estado)
    {
        $this->estado = $estado;
    }
    function getestado()
    {
        return $this->estado;
    }


    function setnombre_consultorio($nombre_consultorio)
    {
        $this->nombre_consultorio = $nombre_consultorio;
    }
    function getnombre_consultorio()
    {
        return $this->nombre_consultorio;
    }
}
