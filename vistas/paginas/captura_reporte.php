<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ini_set("memory_limit", "-1");

    // include "controladores/captura.controlador.php";
    // include "modelos/captura.modelo.php";
    // include "controladores/tabla.controlador.php";
    // include "modelos/reporte.modelo.php";
    //require_once "controladores/log.controlador.php";    <---- Esta no se ocupa por ahora(creo)

    // $tabla = new ControladorTabla();
    // $tabla -> ctrReporteCiudadano();

    // $captura = new ControladorCaptura();
    // $captura -> crtMostrarCiudad();
    // $captura -> crtMostrarNecesidad();
    // $captura -> crtMostrarPais();
    // $captura -> crtMostrarDetalle();
    // $captura -> crtMostrarDelito();

        // $sexo = ControladorCaptura::crtMostrarSexo();
        // $alcaldia = ControladorCaptura::crtMostrarAlcaldia();
        // $ciudad =  ControladorCaptura::crtMostrarCiudad();
        // $pais =  ControladorCaptura::crtMostrarPais();
        // $necesidad = ControladorCaptura::crtMostrarNecesidad();

    
    // $detalle = ControladorCaptura::crtMostrarDetalle();
    // $delito = ControladorCaptura::crtMostrarDetalle();
    // $edad = ControladorCaptura::crtMostrarEdad();
    // $canaliza = ControladorCaptura::crtMostrarCanaliza();
    // $conducta = ControladorCaptura::crtMostrarConducta();
    // $contacto = ControladorCaptura::crtMostrarContacto();
    // $forma = ControladorCaptura::crtMostrarForma();
    // $hechos = ControladorCaptura::ctrMostrarHecho();
    // $llamada = ControladorCaptura::ctrMostrarLlamada();
    // $escolar = ControladorCaptura::ctrMostrarEscolar();
    // $ocupacion = ControladorCaptura::ctrMostrarOcupacion();
    // $civil = ControladorCaptura::ctrMostrarEdoCivil();
    // $social = ControladorCaptura::ctrMostrarSsocial();
    // $etapa = ControladorCaptura::ctrMostrarEtapa();
    // $enfermedad = ControladorCaptura::ctrMostrarEnfermedad();
    // $vive = ControladorCaptura::ctrMostrarVive();
    // $observa = ControladorCaptura::ctrMostrarObserva();
    // $parentesco = ControladorCaptura::ctrMostrarParentesco();
    // $age = ControladorCaptura::ctrMostrarAge();
    // $ocupa = ControladorCaptura::ctrMostrarOcupa();
    // $esc = ControladorCaptura::ctrMostrarGrado();
    // $mal= ControladorCaptura::ctrMostrarMaltrato();
    // $desde = ControladorCaptura::ctrMostrarDesdeC();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="vistas/images/favicon.png">
    <title>Captura de registro</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/adminpro/" />
    <link href="vistas/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vistas/plugins/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">
    <link href="vistas/plugins/wizard/steps.css" rel="stylesheet">
    <link href="vistas/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="vistas/css/style.css" rel="stylesheet">
    <link href="vistas/css/pages/bootstrap-switch.css" rel="stylesheet">
    <link href="vistas/css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header card-no-border fix-sidebar">

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Consejo ciudadano</p>
        </div>
    </div>

    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="./">
                        <span>
                            <img src="vistas/images/logo-w.png" class="light-logo" alt="homepage" style="height:70px;"/>
                        </span> 
                    </a>
                </div>

                <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto" style="margin-left:-50px!important;">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down"></li>
                    </ul>

                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="vistas/images/icon/user-w.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="vistas/images/icon/user-icon.png" alt="user"></div>
                                            <div class="u-text">
                                                <h3>VIBA880805</h3>
                                                <p class="text-muted">ATALA MARIA DEL CONSUELO</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="controladores/CtrlLogOut.php"><i class="fa fa-power-off"></i>  Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>

        <aside class="left-sidebar">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="./" aria-expanded="false"><i class="mdi mdi-home-outline"></i><span class="hide-menu">Inicio</span></a>
                        </li>
                        <li class="active"> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu">Captura de reporte</span></a>
                        </li>
                        <li class="three-column"> <a class="has-arrow waves-effect waves-dark"  aria-expanded="false"><i class="mdi mdi-checkbox-marked-circle-outline"></i><span class="hide-menu">Validación</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./?page=validar_reporte">Validar reporte</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Seguimiento</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./?page=seguimiento_consulta">Consulta</a></li>
                                <li><a href="./?page=seguimiento_exportacion">Exportación</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>


        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row" id="validation">

                    <div class="col-12">
                        <div class="card wizard-content">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Captura de reporte ciudadano</h4>
                                <h6 class="card-subtitle">Introduce los datos que se te solicitan.</h6> -->
                                <form class="validation-wizard wizard-circle">
                                    <!-- ----------------------------------------------------------------------------- Paso 1 ----------------------------------------------------------------------------- -->
                                    <h6></h6>

                                    <section>  

                                        <h3 class="box-title">Tipo de llamada</h3> 
                                        <hr class="m-t-0 m-b-20">

                                        <div class="row">

                                            <div class="col-md-5">
                                                <div class="form-group ">
                                                    <label for="origen_llamada">Origen de la llamada </label>
                                                    <select class="custom-select form-control required" id="origen_llamada" name="origen_llamada">
                                                        <option value="LineaSeguridad" selected>Linea de seguridad</option>
                                                        <option value="CincoTres">*5533</option>
                                                        <option value="NueveOnce">911</option>
                                                        <option value="WhatsApp">WhatsApp</option>
                                                        <option value="Turista">Turista</option>
                                                        <option value="CorreoElectronico">Correo electrónico</option>
                                                    </select>
                                                </div>  
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group bt-switch">
                                                    <center>
                                                        <label class="custom-control">
                                                            <label for="origen_llamada" style="display:block;">Línea Nacional Contra La Trata</label>
                                                                <input value="NoMasTrata" id="NoMasTrata" name="trata" type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Si" data-off-text="No">
                                                        </label>
                                                    </center>
                                                </div>
                                            </div>

                                            <div class="col-md-4 TrataFolio" style="display:none;">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Número de folio </label>
                                                    <input type="text" class="form-control" id="FolioTrata" name="FolioTrata"> 
                                                </div>
                                            </div>

                                        </div>

                                        <h3 class="box-title">Datos del denunciante</h3> 
                                        <hr class="m-t-0 m-b-20">

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="NombreDenunciante">Nombre(s)</label>
                                                    <input type="text" class="form-control" id="DenuncianteNombre" name="DenuncianteNombre"> 
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ApellidoPaterno">Apellido Paterno</label>
                                                    <input type="text" class="form-control" id="DenuncianteApellidoPaterno" name="DenuncianteApellidoPaterno">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="DenuncianteApellidoMaterno">Apellido Materno</label>
                                                    <input type="text" class="form-control" id="DenuncianteApellidoMaterno" name="DenuncianteApellidoMaterno">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="DenuncianteEdad">Edad</label>
                                                        <select class="custom-select form-control" id="DenuncianteEdad" name="DenuncianteEdad">
                                                            <option disabled selected value="">Selecciona una opción</option>
                                                            <option value="0 a 3 años">0 a 3 años</option>
                                                            <option value="0 a 6 años">0 a 6 años</option>
                                                            <option value="7 a 11 años">7 a 11 años</option>
                                                            <option value="12 a 15 años">12 a 15 años</option>
                                                            <option value="18 a 20 años">18 a 20 años</option>
                                                            <option value="21 a 25 años">21 a 25 años</option>
                                                            <option value="26 a 30 años">26 a 30 años</option>
                                                            <option value="31 a 35 años">31 a 35 años</option>
                                                            <option value="36 a 40 años">36 a 40 años</option>
                                                            <option value="41 a 45 años">41 a 45 años</option>
                                                            <option value="46 a 50 años">46 a 50 años</option>
                                                            <option value="51 a 55 años">51 a 55 años</option>
                                                            <option value="56 a 60 años">56 a 60 años</option>
                                                            <option value="61 a 65 años">61 a 65 años</option>
                                                            <option value="66 a 70 años">66 a 70 años</option>
                                                            <option value="Más de 70 años">Más de 70 años</option>
                                                        </select>
                                                </div>  
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="DenuncianteSexo">Sexo</label>
                                                    <select class="custom-select form-control" id="DenuncianteSexo" name="DenuncianteSexo">
                                                        <option value="" disabled selected>Selecciona una opción</option>
                                                    </select>        
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="DenuncianteTelefono">Teléfono</label>
                                                    <input type="text" class="form-control" id="DenuncianteTelefono" name="DenuncianteTelefono"  onkeypress="return isNumberKey(event)" minlength="10" maxlength="10">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="DenuncianteTelefonoIDLlamadas">Teléfono ID llamadas</label>
                                                    <input type="text" class="form-control" id="DenuncianteTelefonoIDLlamadas" name="DenuncianteTelefonoIDLlamadas"  onkeypress="return isNumberKey(event)" minlength="10" maxlength="10">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="DenuncianteOrigen">Origen del usuario</label>
                                                    <select id="DenuncianteOrigen" name="DenuncianteOrigen" onchange="ShowOrigen();" class="custom-select form-control" >
                                                        <option value="" disabled selected>Selecciona una opción</option>
                                                        <option value="1">Local</option>
                                                        <option value="2">Foráneo</option>
                                                        <option value="3">Extranjero</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="display: none" id="local">
                                                <div class="form-group">
                                                    <label for="OrigenAlcaldia">Alcaldía</label>
                                                    <select class="custom-select form-control " id="OrigenAlcaldia" name="OrigenAlcaldia"></select>
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="display: none" id="foraneo">
                                                <div class="form-group">
                                                <label for="OrigenForaneo">Estado</label>
                                                    <select class="custom-select form-control" id="OrigenForaneo" name="OrigenForaneo"></select>        
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="display: none" id="extranjero">
                                                <div class="form-group">
                                                    <label for="OrigenExtranjero">País</label>
                                                    <select class="custom-select form-control" id="OrigenExtranjero" name="OrigenExtranjero"></select>
                                                </div>
                                            </div>

                                        </div>

                                
                                    </section>

                                    <!-- ----------------------------------------------------------------------------- Paso 2 ----------------------------------------------------------------------------- -->
                                    <h6></h6>

                                    <section>

                                        <h3 class="box-title">Descripción de los hechos</h3> 
                                        <hr class="m-t-0 m-b-20">

                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="DescripcionHechosFecha">Fecha</label>
                                                    <input type="date" class="form-control" id="DescripcionHechosFecha" name="DescripcionHechosFecha" value="<?php  echo date("Y-m-d"); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="DescripcionHechosHora">Hora</label>
                                                    <input type="time" class="form-control" id="DescripcionHechosHora" name="DescripcionHechosHora" value="<?php  echo date("H:i"); ?>">
                                                </div>
                                            </div>

                                        </div>

                                        <h3 class="box-title">Circunstancias de tiempo, lugar y modo</h3> 
                                        <hr class="m-t-0 m-b-20">

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="DescripcionHechosTexto">¿Cuándo?, ¿Dónde?, ¿Qué?, ¿Con qué?, ¿Quién?, ¿Cómo?</label>
                                                    <textarea name="DescripcionHechosTexto" id="DescripcionHechosTexto" rows="6" class="form-control" placeholder="Hechos..."></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                        
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="DescripcionNecesidad">Necesidad</label>
                                                    <select class="custom-select form-control" id="DescripcionNecesidad" name="DescripcionNecesidad" onchange="seleccionarCatalogo();">
                                                        <option value="" disabled selected>Selecciona una opción</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4" style="display:none;" id="NecesidadCatalogo">
                                                <div class="form-group">
                                                    <label for="DescripcionCatalogo">Catálogo</label>
                                                    <select  class="custom-select form-control " id="DescripcionCatalogo" name="DescripcionCatalogo" onchange="seleccionarDelitos();">
                                                        <option value="" disabled selected>Selecciona una opción</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4" style="display:none;"  id="NecesidadDelitoInfraccion">
                                                <div class="form-group">
                                                    <label for="DescripcionDelitoInfraccion">Delito/Infracción</label>
                                                    <select class="custom-select form-control" id="DescripcionDelitoInfraccion" name="DescripcionDelitoInfraccion">
                                                        <option value="" disabled selected>Selecciona una opción</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>


                                        <div style="display:none;" class="Necesidades">

                                        </div>


                                    </section>


                                    <!-- ----------------------------------------------------------------------- Termino del Paso 2 ----------------------------------------------------------------------------- -->

                                    <!-- ----------------------------------------------------------------------------- Paso 3 ----------------------------------------------------------------------------------- -->

                                        <h6></h6>
                                        <section>

                                            <h3 class="box-title">¿Pertenece a un programa especial?</h3> 
                                            <hr class="m-t-0 m-b-20">
                                        
                                            <div class="row">

                                                <div class="col-md-2">
                                                    <div class="form-group bt-switch" style="margin-top:2px;">
                                                        <center>
                                                            <label class="custom-control">
                                                                    <input value="Si" data-size="normal" id="ProgramaEspecialSwitch" name="ProgramaEspecialSwitch" type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Si" data-off-text="No">
                                                            </label>
                                                        </center>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 ProgramaEspecialOpciones" style="display: none; margin-bottom:-10px;">
                                                    <div class="form-group">
                                                        <select class="custom-select form-control" id="ProgramaEspecial"  name="ProgramaEspecial"></select>
                                                    </div>
                                                </div>

                                            </div>

                                            <h3 class="box-title">¿Lugar de los hechos?</h3> 
                                            <hr class="m-t-0 m-b-20">

                                                                                    
                                            <div class="row">

                                                <div class="col-md-2">
                                                    <div class="form-group bt-switch" style="margin-top:2px;">
                                                        <center>
                                                            <label class="custom-control">
                                                                    <input value="Si" data-size="normal" id="LugarHechosSwitch" name="LugarHechosSwitch" type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Si" data-off-text="No">
                                                            </label>
                                                        </center>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 LugarHechosOpciones" style="display: none; margin-bottom:-10px;">
                                                    <div class="form-group">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#ModalLugarHechosDireccion"><i class="fa fa-plus-circle"></i> Añadir dirección</button>
                                                    </div>
                                                </div>

                                                <div id="ModalLugarHechosDireccion" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true" data-backdrop="static">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="vcenter" style="font-family:'Product Sans'; font-weight:bold;">Lugar de los hechos</h4>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="row">            
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="lugar_hechos_cp">Codigo Postal</label>
                                                                            <input type="text" class="form-control " id="temp_lugar_hechos_cp" name="temp_lugar_hechos_cp"  minlength="5" maxlength="5" onkeypress="return isNumberKey(event)">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="wlocation2">Estado</label>
                                                                            <select class="custom-select form-control " id="temp_lugar_hechos_estado" name="temp_lugar_hechos_estado" disabled>
                                                                                <option value="" disabled selected>Selecciona una opcion</option>
                                                                            </select> 
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label for="wintType1">Colonia</label>
                                                                                <select class="custom-select form-control " id="temp_lugar_hechos_colonia" name="temp_lugar_hechos_colonia" disabled>
                                                                                    <option value="" disabled selected>Selecciona una opcion</option>
                                                                                </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="wintType1">Municipio ó alcaldía</label>
                                                                                <select class="custom-select form-control " id="temp_lugar_hechos_municipio" name="temp_lugar_hechos_alcaldia" disabled>
                                                                                    <option value="" disabled selected>Selecciona una opción</option>
                                                                                </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="wfirstName2">Calle</label>
                                                                            <input type="text" class="form-control " id="temp_lugar_hechos_calle" name="temp_lugar_hechos_calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label for="wfirstName2">No. Ext</label>
                                                                            <input type="text" class="form-control " id="temp_lugar_hechos_no_ext" name="temp_lugar_hechos_no_ext">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label for="wfirstName2">No. Int</label>
                                                                            <input type="text" class="form-control " id="temp_lugar_hechos_no_int" name="temp_lugar_hechos_no_int">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="wfirstName2">Entre que calles y/o Referencias</label>
                                                                            <input type="text" class="form-control " id="temp_lugar_hechos_referencias" name="temp_lugar_hechos_referencias">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="wfirstName2">Teléfono</label>
                                                                            <input type="text" class="form-control " id="temp_lugar_hechos_telefono" name="temp_lugar_hechos_telefono" onkeypress="return isNumberKey(event)" maxlength="10">
                                                                        </div>
                                                                    </div>
                            
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-family:'Roboto';" onclick="EmptyLugarHechosTemp();">Cancelar</button>
                                                                <button id="TempLugarHechosAdd" type="button" class="btn btn-info" data-dismiss="modal" style="font-family:'Roboto'; display:none;" onclick="addLugarHechosToTable();">Añadir</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row LugarHechosTablaContainer" style="display:none;">

                                                <div class="col-md-12 LugarHechosTabla">
                                                    <h4 class="card-title">Direcciones</h4>
                                                    <div class="table-responsive">
                                                        <table class="table color-table muted-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class='align-middle'>Código Postal</th>
                                                                    <th class='align-middle'>Estado</th>
                                                                    <th class='align-middle'>Colonia</th>
                                                                    <th class='align-middle'>Alcaldía</th>
                                                                    <th class='align-middle'>Calle</th>
                                                                    <th class='align-middle'>No. Ext.</th>
                                                                    <th class='align-middle'>No. Int.</th>
                                                                    <th class='align-middle'>Referencias</th>
                                                                    <th class='align-middle'>Teléfono</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class='LugarHechosRows'>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                          
                                            <h3 class="box-title">¿Reportan autos?</h3> 
                                            <hr class="m-t-0 m-b-20">

                                            <div class="row">

                                                <div class="col-md-2">
                                                    <div class="form-group bt-switch" style="margin-top:2px;">
                                                        <center>
                                                            <label class="custom-control">
                                                                    <input value="Si" data-size="normal" id="ReportanAutoSwitch" name="ReportanAutoSwitch" type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Si" data-off-text="No">
                                                            </label>
                                                        </center>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 ReportanAutoOpciones" style="display: none; margin-bottom:-10px;">
                                                    <div class="form-group">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#ModalReportanAuto" onclick="initMarcas();"><i class="fa fa-plus-circle"></i> Añadir auto</button>
                                                    </div>
                                                </div>

                                            </div>

                                            <div id="ModalReportanAuto" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true" data-backdrop="static">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="vcenter" style="font-family:'Product Sans'; font-weight:bold;">Características del auto</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempMarcaVehiculo">Marca</label>
                                                                        <select class="custom-select form-control" id="TempMarcaVehiculo" name="TempMarcaVehiculo" onchange="getModelo();">
                                                                            <option value="" disabled selected>Marca...</option>                   
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempModeloVehiculo">Modelo</label>
                                                                        <select class="custom-select form-control" id="TempModeloVehiculo" name="TempModeloVehiculo" disabled onchange="showSaveVehiculo();">
                                                                            <option value="" disabled selected>Modelo...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempColorVehiculo">Color</label>
                                                                        <select class="custom-select form-control" id="TempColorVehiculo" name="TempColorVehiculo">
                                                                            <option value="" disabled selected>Color...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPlacasVehiculo">No. de placas</label>
                                                                        <input type="text" class="form-control" id="TempPlacasVehiculo" name="TempPlacasVehiculo">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="TempCaracteristicasVehiculo">Características Particulares</label>
                                                                        <textarea rows="4" class="form-control" id="TempCaracteristicasVehiculo" name="TempCaracteristicasVehiculo"></textarea>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" style="font-family:'Roboto';" onclick="EmptyReportanAutoTemp();">Cancelar</button>
                                                            <button id="TempVehiculoAdd" type="button" class="btn btn-info" data-dismiss="modal" style="font-family:'Roboto'; display:none;" onclick="addVehiculoToTable();">Añadir</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row AutosTablaContainer" style="display:none;">

                                                <div class="col-md-12 AutosTabla">
                                                    <h4 class="card-title">Autos</h4>
                                                    <div class="table-responsive">
                                                        <table class="table color-table muted-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class='align-middle'>Marca</th>
                                                                    <th class='align-middle'>Modelo</th>
                                                                    <th class='align-middle'>Color</th>
                                                                    <th class='align-middle'>No. de placas</th>
                                                                    <th class='align-middle'>Características</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class='AutosRows'>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>


                                            <h3 class="box-title">¿Reportan personas?</h3> 
                                            <hr class="m-t-0 m-b-20">

                                            <div class="row">

                                                <div class="col-md-2">
                                                    <div class="form-group bt-switch" style="margin-top:2px;">
                                                        <center>
                                                            <label class="custom-control">
                                                                    <input value="Si" data-size="normal" id="ReportanPersonaSwitch" name="ReportanPersonaSwitch" type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Si" data-off-text="No">
                                                            </label>
                                                        </center>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 ReportanPersonaOpciones" style="display: none; margin-bottom:-10px;">
                                                    <div class="form-group">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#ModalReportanPersona"><i class="fa fa-plus-circle"></i> Añadir persona</button>
                                                    </div>
                                                </div>

                                            </div>

                                            <div id="ModalReportanPersona" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true" data-backdrop="static">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="vcenter" style="font-family:'Product Sans'; font-weight:bold;">Datos de la persona denunciada</h4>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaNombre">Nombre</label>
                                                                        <input type="text" class="form-control" id="TempPersonaDenunciadaNombre" name="TempPersonaDenunciadaNombre">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaApellidoPaterno">Apellido Paterno</label>
                                                                        <input type="text" class="form-control" id="TempPersonaDenunciadaApellidoPaterno" name="TempPersonaDenunciadaApellidoPaterno">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaApellidoMaterno">Apellido Materno</label>
                                                                        <input type="text" class="form-control" id="TempPersonaDenunciadaApellidoMaterno" name="TempPersonaDenunciadaApellidoMaterno">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaAlias">Alias</label>
                                                                        <input type="text" class="form-control" id="TempPersonaDenunciadaAlias" name="TempPersonaDenunciadaAlias">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaOcupacion">Ocupación</label>
                                                                        <input type="text" class="form-control" id="TempPersonaDenunciadaOcupacion" name="TempPersonaDenunciadaOcupacion">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaEdad">Edad</label>
                                                                        <input type="text" class="form-control" id="TempPersonaDenunciadaEdad" name="TempPersonaDenunciadaEdad" onkeypress="return isNumberKey(event)">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaDomicilio">Domicilio</label>
                                                                        <input type="text" class="form-control" id="TempPersonaDenunciadaDomicilio" name="TempPersonaDenunciadaDomicilio">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaSeñas">Señas particulares</label>
                                                                        <input type="text" class="form-control" id="TempPersonaDenunciadaSeñas" name="TempPersonaDenunciadaSeñas">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <h3>Filiación del presunto</h3>
                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaColorOjos">Color de ojos</label>
                                                                        <select class="custom-select form-control" id="TempPersonaDenunciadaColorOjos" name="TempPersonaDenunciadaColorOjos">
                                                                            <option value="Desconoce" selected>Desconoce</option>
                                                                            <option value="Verdes">Verdes</option>
                                                                            <option value="Cafés">Cafés</option>
                                                                            <option value="Negros">Negros</option>
                                                                            <option value="Azules">Azules</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaNariz">Nariz</label>
                                                                        <select class="custom-select form-control" id="TempPersonaDenunciadaNariz" name="TempPersonaDenunciadaNariz">
                                                                            <option value="Desconoce" selected>Desconoce</option>
                                                                            <option value="Convexa">Convexa</option>
                                                                            <option value="Rectilinea">Rectilinea</option>
                                                                            <option value="Cóncava">Cóncava</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaColorCabello">Color de Cabello</label>
                                                                        <select class="custom-select form-control" id="TempPersonaDenunciadaColorCabello" name="TempPersonaDenunciadaColorCabello">
                                                                            <option value="Desconoce" selected>Desconoce</option>
                                                                            <option value="Negro">Negro</option>
                                                                            <option value="Rojo">Rojo</option>
                                                                            <option value="Rubio">Rubio</option>
                                                                            <option value="Castaño">Castaño</option>
                                                                            <option value="Cano">Cano</option>
                                                                            <option value="Café">Café</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaCantidadCabello">Cantidad de Cabello</label>
                                                                        <select class="custom-select form-control" id="TempPersonaDenunciadaCantidadCabello" name="TempPersonaDenunciadaCantidadCabello">
                                                                            <option value="Desconoce" selected>Desconoce</option>
                                                                            <option value="Escaso">Escaso</option>
                                                                            <option value="Abundante">Abundante</option>
                                                                            <option value="Normal">Normal</option>
                                                                            <option value="Calvo">Calvo</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaBoca">Boca</label>
                                                                        <select class="custom-select form-control" id="TempPersonaDenunciadaBoca" name="TempPersonaDenunciadaBoca">
                                                                            <option value="Desconoce" selected>Desconoce</option>
                                                                            <option value="Chica">Chica</option>
                                                                            <option value="Mediana">Mediana</option>
                                                                            <option value="Grande">Grande</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaComplexion">Complexión</label>
                                                                        <select class="custom-select form-control" id="TempPersonaDenunciadaComplexion" name="TempPersonaDenunciadaComplexion">
                                                                            <option value="Desconoce" selected>Desconoce</option>
                                                                            <option value="Regular">Regular</option>
                                                                            <option value="Delgada">Delgada</option>
                                                                            <option value="Obesa">Obesa</option>
                                                                            <option value="Fornido">Fornido</option>
                                                                            <option value="Robusta">Robusta</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaColorPiel">Color de piel</label>
                                                                        <select class="custom-select form-control" id="TempPersonaDenunciadaColorPiel" name="TempPersonaDenunciadaColorPiel">
                                                                            <option value="Desconoce" selected>Desconoce</option>
                                                                            <option value="Negro">Negro</option>
                                                                            <option value="Moreno">Moreno</option>
                                                                            <option value="Albino">Albino</option>
                                                                            <option value="Blanco">Blanco</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="TempPersonaDenunciadaCejas">Cejas</label>
                                                                        <select class="custom-select form-control" id="TempPersonaDenunciadaCejas" name="TempPersonaDenunciadaCejas">
                                                                            <option value="Desconoce" selected>Desconoce</option>
                                                                            <option value="Regulares">Regulares</option>
                                                                            <option value="Escasas">Escasas</option>
                                                                            <option value="Pobladas">Pobladas</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" id="EmptyReportanPersonaTemp" class="btn btn-default" data-dismiss="modal" style="font-family:'Roboto';" onclick="EmptyPersonaTemp();">Cancelar</button>
                                                            <button id="TempPersonaAdd" type="button" class="btn btn-info" data-dismiss="modal" style="font-family:'Roboto';" onclick="addPersonaToTable();">Añadir</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row PersonasTablaContainer" style="display:none;">

                                                <div class="col-md-12 PersonasTabla">
                                                    <h4 class="card-title">Personas reportadas</h4>
                                                    <div class="table-responsive">
                                                        <table class="table color-table muted-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class='align-middle'>Nombre</th>
                                                                    <th class='align-middle'>Alias</th>
                                                                    <th class='align-middle'>Ocupación</th>
                                                                    <th class='align-middle'>Edad</th>
                                                                    <th class='align-middle'>Domicilio</th>
                                                                    <th class='align-middle'>Señas particulares</th>
                                                                    <th class='align-middle'>Color de ojos</th>
                                                                    <th class='align-middle'>Tipo de nariz</th>
                                                                    <th class='align-middle'>Color de cabello</th>
                                                                    <th class='align-middle'>Cantidad de cabello</th>
                                                                    <th class='align-middle'>Boca</th>
                                                                    <th class='align-middle'>Complexión</th>
                                                                    <th class='align-middle'>Color de piel</th>
                                                                    <th class='align-middle'>Cejas</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class='PersonasRows'>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                                
                                        </section>
                                    <!-- ----------------------------------------------------------------------- Termino del Paso 3 ----------------------------------------------------------------------------- -->

                                    <!-- ----------------------------------------------------------------------------- Paso 4 ----------------------------------------------------------------------------------- -->
                                        
                                        <h6></h6>
                                        <section>

                                            <h3 class="box-title">Observaciones</h3> 
                                            <hr class="m-t-0 m-b-20">

                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="ObservacionesTexto">Observaciones</label>
                                                        <textarea name="ObservacionesTexto" id="ObservacionesTexto" rows="6" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <h3 class="box-title">Terminación de la llamada</h3> 
                                            <hr class="m-t-0 m-b-20">

                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="TerminacionLlamada">Terminación de la llamada</label>
                                                        <select class="custom-select form-control" id="TerminacionLlamada" name="TerminacionLlamada">
                                                            <option disabled selected value="">Selecciona una Opción</option>
                                                        </select>
                                                    </div>  
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group bt-switch">
                                                        <center>
                                                            <label class="custom-control">
                                                                <label for="LlamadaRelevante" style="display:block;">Relevante</label>
                                                                    <input value="Si" id="LlamadaRelevante" name="LlamadaRelevante" type="checkbox" data-on-color="success" data-off-color="danger" data-on-text="Si" data-off-text="No">
                                                            </label>
                                                        </center>
                                                    </div>
                                                </div>

                                            </div>   
    
                                        </section>

                                        <!-- ----------------------------------------------------------------------------- Termino del Paso 4 ----------------------------------------------------------------------------- -->

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <footer class="footer"> © <script>document.write(new Date().getFullYear());</script> Consejo ciudadano </footer>

        </div>

    </div>



    <script src="vistas/plugins/jquery/jquery.min.js"></script>

    <script src="vistas/plugins/bootstrap/js/popper.min.js"></script>
    <script src="vistas/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="vistas/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="vistas/js/waves.js"></script>
    <script src="vistas/js/sidebarmenu.js"></script>
    <script src="vistas/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="vistas/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="vistas/js/custom.min.js"></script>
    <script src="vistas/plugins/moment/moment.js"></script>
    <script src="vistas/plugins/wizard/jquery.steps.min.js"></script>
    <script src="vistas/plugins/wizard/jquery.validate.min.js"></script>
    <script src="vistas/js/sweetalert.min.js"></script>
    <script src="vistas/plugins/wizard/steps.js"></script>
    <script src="vistas/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
    
    <script src="vistas/js/RadioButtom.js"></script>
    <script src="vistas/js/script.js"></script>


    <script type="text/javascript">
    $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
    var radioswitch = function() {
        var bt = function() {
            $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
            }), $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
            })
        };
        return {
            init: function() {
                bt()
            }
        }
    }();
    $(document).ready(function() {
        radioswitch.init()
    });
    </script>

    
    <script src="vistas/plugins/styleswitcher/jQuery.style.switcher.js"></script>
          
</body>
</html>
