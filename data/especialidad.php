<?php

class Especialidad
{
    private $id_especialidad;
    private $nombre_especialidad;
    private $estado;

    public function __construct()
    {
        $this->id_especialidad = '';
        $this->nombre_especialidad = '';
        $this->estado = '';
    }

    function setid_especialidad($id_especialidad)
    {
        $this->id_especialidad = $id_especialidad;
    }
    function getid_especialidad()
    {
        return $this->id_especialidad;
    }

    function setestado($estado)
    {
        $this->estado = $estado;
    }
    function getestado()
    {
        return $this->estado;
    }

    
    function setnombre_especialidad($nombre_especialidad)
    {
        $this->nombre_especialidad = $nombre_especialidad;
    }
    function getnombre_especialidad()
    {
        return $this->nombre_especialidad;
    }
}
