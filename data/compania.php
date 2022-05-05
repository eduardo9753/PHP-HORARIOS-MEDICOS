<?php

class Compania
{
    private $id_compania;
    private $nombre_compania;
    private $estado;

    public function __construct()
    {
        $this->id_compania = '';
        $this->nombre_compania = '';
        $this->estado = '';
    }

    function setid_compania($id_compania)
    {
        $this->id_compania = $id_compania;
    }
    function getid_compania()
    {
        return $this->id_compania;
    }


    function setnombre_compania($nombre_compania)
    {
        $this->nombre_compania = $nombre_compania;
    }
    function getnombre_compania()
    {
        return $this->nombre_compania;
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
