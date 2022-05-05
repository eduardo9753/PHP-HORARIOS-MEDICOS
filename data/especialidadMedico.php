<?php

class EspecialidadMedico
{
    private $id;
    private $id_especialidad;
    private $id_medico;

    public function __construct()
    {
        $this->id = '';
        $this->nombre_especialidad = '';
        $this->id_medico = '';
    }

    function setid($id)
    {
        $this->id = $id;
    }
    function getid()
    {
        return $this->id;
    }

    function setid_especialidad($id_especialidad)
    {
        $this->id_especialidad = $id_especialidad;
    }
    function getid_especialidad()
    {
        return $this->id_especialidad;
    }

    function setid_medico($id_medico)
    {
        $this->id_medico = $id_medico;
    }
    function getid_medico()
    {
        return $this->id_medico;
    }
}
