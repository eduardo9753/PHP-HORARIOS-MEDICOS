<?php

class EstadoMedico
{
    private $id_estado_medico;
    private $estado;

    public function __construct()
    {
        $this->id_estado_medico = '';
        $this->estado = '';
    }

    function setid_estado_medico($id_estado_medico)
    {
        $this->id_estado_medico = $id_estado_medico;
    }
    function getid_estado_medico()
    {
        return $this->id_estado_medico;
    }


    function setestado($estado)
    {
        $this->estado = $estado;
    }
    function getestado()
    {
        return $this->estado;
    }
}
