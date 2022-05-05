<?php

class Usuario
{

    private $id_user;
    private $nombreUser;
    private $contraUser;
    private $perfil;
    private $area;
    private $foto;

    public function __construct()
    {
        $this->id_user = "";
        $this->nombreUser = "";
        $this->contraUser = "";
        $this->perfil = "";
        $this->area = "";
        $this->foto = "";
    }


    function setid_user($id_user)
    {
        $this->id_user = $id_user;
    }
    function getid_user()
    {
        return $this->id_user;
    }



    function setnombreUser($nombreUser)
    {
        $this->nombreUser = $nombreUser;
    }
    function getnombreUser()
    {
        return $this->nombreUser;
    }


    function setcontraUser($contraUser)
    {
        $this->contraUser = $contraUser;
    }
    function getcontraUser()
    {
        return $this->contraUser;
    }


    function setfoto($foto)
    {
        $this->foto = $foto;
    }
    function getfoto()
    {
        return $this->foto;
    }

    function setperfil($perfil)
    {
        $this->perfil = $perfil;
    }
    function getperfil()
    {
        return $this->perfil;
    }

    function setarea($area)
    {
        $this->area = $area;
    }
    function getarea()
    {
        return $this->area;
    }
}
