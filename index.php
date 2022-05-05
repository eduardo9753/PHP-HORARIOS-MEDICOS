<?php

include_once('controller/controlIndex.php');
include_once('controller/controlLogin.php');
include_once('controller/controlGrafico.php');
include_once('controller/controlProfile.php');
include_once('controller/controlMedico.php');
include_once('controller/controlReportes.php');
include_once('controller/controlSop.php');
include_once('controller/controlAdministrador.php');
include_once('controller/controlAdministradorMedico.php');

date_default_timezone_set("America/Lima");

//PHP PDF
require_once 'lib/pdf/fpdf.php';

//PHP EXCEL
require_once 'lib/PHPExcel/Classes/PHPExcel.php';

include_once('controller/controlLeerLibro.php');
$libro = new ControlLeerLibro();



//VARIABLES CONTROLADORES
$controlIndex = new ControlIndex();
$controlLogin = new ControlLogin();
$controlGrafico = new ControlGrafico();
$controlProfile = new ControlProfile();
$controlMedico = new ControlMedico();
$controlReporte = new ControlReportes();
$controlSop = new ControlSop();
$controlAdministrador = new ControlEventoAdministrador();
$controlAdministradorMedico = new ControlEventoAdministradorMedico();


//LLAMADA DE METODOS
if (!isset($_REQUEST['ruta'])) {
    $controlIndex->index();
} else {
    $peticion = $_REQUEST['ruta'];
    if (method_exists($controlIndex, $peticion)) {
        call_user_func(array($controlIndex, $peticion));
    } else if (method_exists($controlLogin, $peticion)) {
        call_user_func(array($controlLogin, $peticion));
    } else if (method_exists($controlGrafico, $peticion)) {
        call_user_func(array($controlGrafico, $peticion));
    } else if (method_exists($controlProfile, $peticion)) {
        call_user_func(array($controlProfile, $peticion));
    } else if (method_exists($controlMedico, $peticion)) {
        call_user_func(array($controlMedico, $peticion));
    } else if (method_exists($controlReporte, $peticion)) {
        call_user_func(array($controlReporte, $peticion));
    } else if (method_exists($controlSop, $peticion)) {
        call_user_func(array($controlSop, $peticion));
    } else if (method_exists($controlAdministrador, $peticion)) {
        call_user_func(array($controlAdministrador, $peticion));
    } else if (method_exists($controlAdministradorMedico, $peticion)) {
        call_user_func(array($controlAdministradorMedico, $peticion));
    } else if (method_exists($libro, $peticion)) {
        call_user_func(array($libro, $peticion));
    } else {
        $controlIndex->NoEncontrado();
    }
}


//OBS : CUANDO SE TRABAJA CON AJAX 
