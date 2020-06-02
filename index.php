<?php 

require_once "controladores/plantilla.controlador.php";
require_once "controladores/captura.controlador.php";
require_once "modelos/captura.modelo.php";
require_once "controladores/tabla.controlador.php";
require_once "modelos/reporte.modelo.php";
//require_once "controladores/log.controlador.php";


//$login = new ControladorLogin();
//$login -> ctrTraerLogin();

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

$tabla = new ControladorTabla();
$tabla -> ctrReporteCiudadano();

$captura = new ControladorCaptura();
$captura -> crtMostrarCiudad();
$captura -> crtMostrarNecesidad();
$captura -> crtMostrarPais();
$captura -> crtMostrarDetalle();
$captura -> crtMostrarDelito();



?>            