<?php

class Evento
{
    private $id;
    private $title;
    private $descripcion;
    private $id_medico;
    private $color;
    private $textColor;
    private $start;
    private $end;
    private $allDay;
    private $id_estado;

    public function __construct()
    {
        $this->id = '';
        $this->title = '';
        $this->descripcion = '';
        $this->id_medico = '';
        $this->color = '';
        $this->textColor = '';
        $this->start = '';
        $this->end = '';
        $this->allDay = '';
        $this->id_estado = '';
    }

    function setid($id)
    {
        $this->id = $id;
    }
    function getid()
    {
        return $this->id;
    }



    function settitle($title)
    {
        $this->title = $title;
    }
    function gettitle()
    {
        return $this->title;
    }


    function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    function getdescripcion()
    {
        return $this->descripcion;
    }


    function setid_medico($id_medico)
    {
        $this->id_medico = $id_medico;
    }
    function getid_medico()
    {
        return $this->id_medico;
    }

    function setcolor($color)
    {
        $this->color = $color;
    }
    function getcolor()
    {
        return $this->color;
    }



    function settextColor($textColor)
    {
        $this->textColor = $textColor;
    }
    function gettextColor()
    {
        return $this->textColor;
    }


    function setstart($start)
    {
        $this->start = $start;
    }
    function getstart()
    {
        return $this->start;
    }


    function setend($end)
    {
        $this->end = $end;
    }
    function getend()
    {
        return $this->end;
    }


    function setallDay($allDay)
    {
        $this->allDay = $allDay;
    }
    function getallDay()
    {
        return $this->allDay;
    }

    function setid_estado($id_estado)
    {
        $this->id_estado = $id_estado;
    }
    function getid_estado()
    {
        return $this->id_estado;
    }
}
