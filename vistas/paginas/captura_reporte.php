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
                                                            <label for="origen_llamada" style="display:block;">No más XT</label>
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
                                                    <select class="custom-select form-control" id="DescripcionNecesidad" name="DescripcionNecesidad" onchange="seleccionarNecesidad();">
                                                        <option value="" disabled selected>Selecciona una opción</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4" style="display:none;" id="NecesidadCatalogo">
                                                <div class="form-group">
                                                    <label for="DescripcionCatalogo">Catálogo</label>
                                                    <select  class="custom-select form-control " id="DescripcionCatalogo" name="DescripcionCatalogo" onchange="seleccionarCatalogo();">
                                                        <option value="" disabled selected>Selecciona una opción</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4" style="display:none;"  id="NecesidadDelitoInfraccion">
                                                <div class="form-group">
                                                    <label for="DescripcionDelitoInfraccion">Delito/Infracción</label>
                                                    <select class="custom-select form-control" id="DescripcionDelitoInfraccion" name="DescripcionDelitoInfraccion">
                                                        <option value="" disabled selected>Selecciona una opción</option>
                                                        <?php foreach($delito as $cdelito) : ?>
                                                            <option value="<?php echo $cdelito['CON_ID']?>"><?php echo $cdelito['CON_DESCRIPCION']?></option>

                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div style="display:none;" class="Necesidades">

                                        </div>

                                        <div class="row" style="display: none" id="ExtorcionTelefonica">
                                            <h3>Extorsión Telefonica/Fraude</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2"> Canalizada por : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control " id="" name="">
                                                            
                                                            <option value=" ">Selecciona una opciòn </option>
                                                            <?php foreach($canaliza as $canalizado) : ?>
                                                                <option value="<?php echo $canalizado['CON_ID']?>"><?php echo $canalizado['CON_DESCRIPCION']?></option>

                                                            <?php endforeach; ?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlastName2"> Folio Canalizada : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wlastName2" name="lastName"> 
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2"> Probable Conducta Delictiva : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control " id="" name="">
                                                            
                                                            <option value=" ">Selecciona una opciòn </option>
                                                            <?php foreach($conducta as $cconducta) : ?>
                                                                <option value="<?php echo $cconducta['CON_ID']?>"><?php echo $cconducta['CON_DESCRIPCION']?></option>

                                                            <?php endforeach; ?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2">
                                                        Exigencia Requerida : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control " id="" name="">
                                                            
                                                            <option value=" ">Selecciona una opciòn </option>
                                                            <?php foreach($conducta as $cconducta) : ?>
                                                                <option value="<?php echo $cconducta['CON_ID']?>"><?php echo $cconducta['CON_DESCRIPCION']?></option>

                                                            <?php endforeach; ?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2">
                                                        Forma en la que se realiza el contacto : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control " id="" name="">
                                                            
                                                            <option value=" ">Selecciona una opciòn </option>
                                                            <?php foreach($contacto as $ccontacto) : ?>
                                                                <option value="<?php echo $ccontacto['CON_ID']?>"><?php echo $ccontacto['CON_DESCRIPCION']?></option>

                                                            <?php endforeach; ?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2">
                                                        Tipo de telefono en que se recibe la llamada :: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control " id="" name="">
                                                            
                                                            <option value=" ">Selecciona una opciòn </option>
                                                            <?php foreach($forma as $fforma) : ?>
                                                                <option value="<?php echo $fforma['CON_ID']?>"><?php echo $fforma['CON_DESCRIPCION']?></option>

                                                            <?php endforeach; ?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Número del que llaman : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> 
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlastName2"> Número del que envian el mensaje : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wlastName2" name="lastName"> 
                                                    </div>
                                                </div>
                        
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlastName2"> Número al que piden comunicarse : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wlastName2" name="lastName"> 
                                                    </div>
                                                </div>
                        
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlastName2"> Dirección electronica involucrada : <span class="danger">*</span> </label>
                                                        <input type="email" class="form-control" id="wlastName2" name="lastName"> 
                                                        
                                                    </div>
                                                </div>
                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Lugar en que se recibe la llamada :</label>
                                                        <label class="custom-control custom-radio">
                                                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                        <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                        <span class="custom-control-label">No</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Estado : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($ciudad as $estado): ?>
                                                                <option value="<?php echo $estado['C_ESTADO']?>"><?php echo $estado['D_ESTADO']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>

                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2">Estatus de los hechos : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($hechos as $chechos): ?>
                                                                <option value="<?php echo $chechos['CON_ID']?>"><?php echo $chechos['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿Inicio Averiguación Previa? :</label>
                                                        <label class="custom-control custom-radio">
                                                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                        <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                        <span class="custom-control-label">No</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlastName2"> Número de Averiguación Prèvia : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wlastName2" name="lastName"> 
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿Requiere Acompañamiento? :</label>
                                                        <label class="custom-control custom-radio">
                                                        <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                        <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                        <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                        <span class="custom-control-label">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>                
                                        </div>
                                            
                                        <div class="row" style="display: none" id="ProteccionAnimales">
                                            <h3>Protecciòn a los animales</h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="wintType1">Problematica de Maltrato :</label>
                                                            <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="Banquet">Normal</option>
                                                                <option value="Fund Raiser">Difficult</option>
                                                                <option value="Dinner Party">Hard</option>
                                                            </select>
                                                    </div>  
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="wintType1">Gènero :</label>
                                                            <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="Banquet">Normal</option>
                                                                <option value="Fund Raiser">Difficult</option>
                                                                <option value="Dinner Party">Hard</option>
                                                            </select>
                                                    </div>  
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="wintType1">Canalizaciòn :</label>
                                                            <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="Banquet">Normal</option>
                                                                <option value="Fund Raiser">Difficult</option>
                                                                <option value="Dinner Party">Hard</option>
                                                            </select>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="row" style="display: none" id="suicidio">
                                            <h3>Suicidio</h3>
                                            <div class="row">
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Quien Realizò la llamada: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($llamada as $cllamada): ?>
                                                                <option value="<?php echo $cllamada['CON_ID']?>"><?php echo $cllamada['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h3>En caso de un menor de edad,registro de nombre del papà, mamà o tuto</h3>
                                                </div> 
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Nivel de Escolaridad : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($escolar as $cescolar): ?>
                                                                <option value="<?php echo $cescolar['CON_ID']?>"><?php echo $cescolar['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Ocupación: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($ocupacion as $cocupacion): ?>
                                                                <option value="<?php echo $cocupacion['CON_ID']?>"><?php echo $cocupacion['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Estado Civil: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($civil as $ccivil): ?>
                                                                <option value="<?php echo $ccivil['CON_ID']?>"><?php echo $ccivil['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Seguridad Social: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($social as $csocial): ?>
                                                                <option value="<?php echo $csocial['CON_ID']?>"><?php echo $csocial['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Es beneficiario de algùn programa social</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Etapa :<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($etapa as $cetapa): ?>
                                                                <option value="<?php echo $cetapa['CON_ID']?>"><?php echo $cetapa['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Enfermedad:<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($enfermedad as $cenfermedad): ?>
                                                                <option value="<?php echo $cenfermedad['CON_ID']?>"><?php echo $cenfermedad['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Antecedentes de hospitalizaciòn</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Consumo de sustancias  :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Antecedentes familiares de enfermedad mental :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Antecedentes familiares de consumo de sustancias :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Antecedentes de suicidio en familia, trabajo, escuela :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Vive con:<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($vive as $cvive): ?>
                                                                <option value="<?php echo $cvive['CON_ID']?>"><?php echo $cvive['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Red de apoyo:</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Derivaciòn a:</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">DIF, D.F.</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Externo</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Servicio de emergencia:</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Observaciònes:<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($observa as $cobserva): ?>
                                                                <option value="<?php echo $cobserva['CON_ID']?>"><?php echo $cobserva['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="display: none" id="MaltratoInfantil">
                                            <h3>Maltrato Infatil</h3>
                                            <h4>Datos de los generadores de conductas violentas</h4>    
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">     
                                                    </div>        
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Parentesco :<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($parentesco as $cparentesco): ?>
                                                                <option value="<?php echo $cparentesco['CON_ID']?>"><?php echo $cparentesco['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Edad :<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($age as $cage): ?>
                                                                <option value="<?php echo $cage['CON_ID']?>"><?php echo $cage['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Sexo: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($sexo as $csexo): ?>
                                                                <option value="<?php echo $csexo['CON_ID']?>"><?php echo $csexo['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Ocupación: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($ocupa as $cocupa): ?>
                                                                <option value="<?php echo $cocupa['CON_ID']?>"><?php echo $cocupa['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>  
                                            </div> 
                                            <h4>Datos de los responsables de la crianza o cuidado</h4> 
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">     
                                                    </div>        
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Parentesco :<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($parentesco as $cparentesco): ?>
                                                                <option value="<?php echo $cparentesco['CON_ID']?>"><?php echo $cparentesco['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Edad :<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($age as $cage): ?>
                                                                <option value="<?php echo $cage['CON_ID']?>"><?php echo $cage['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Sexo: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($sexo as $csexo): ?>
                                                                <option value="<?php echo $csexo['CON_ID']?>"><?php echo $csexo['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Ocupación: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($ocupa as $cocupa): ?>
                                                                <option value="<?php echo $cocupa['CON_ID']?>"><?php echo $cocupa['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div> 
                                            </div>
                                            <h4>Datos de los menores para intervenciòn social</h4> 
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">     
                                                    </div>        
                                                </div>
                                                
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Edad :<span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($age as $cage): ?>
                                                                <option value="<?php echo $cage['CON_ID']?>"><?php echo $cage['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                        
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Sexo: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($sexo as $csexo): ?>
                                                                <option value="<?php echo $csexo['CON_ID']?>"><?php echo $csexo['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> Grado Escolar: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($esc as $cesc): ?>
                                                                <option value="<?php echo $cesc['CON_ID']?>"><?php echo $cesc['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> ¿Cada cuando ocurre el maltrato?: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($mal as $cmal): ?>
                                                                <option value="<?php echo $cmal['CON_ID']?>"><?php echo $cmal['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3"  id="">
                                                    <div class="form-group">
                                                    <label for="wlocation2"> ¿Desde cuándo,comenzó el maltrato?: <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="" name="">
                                                            
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($desde as $cdesde): ?>
                                                                <option value="<?php echo $cdesde['CON_ID']?>"><?php echo $cdesde['CON_DESCRIPCION']?></option>
                                                            <?php endforeach; ?>
                                                        </select>        
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿Acepta que el DIF le devuelva la llamada de seguimiento? :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>     
                                                    
                                                    </div>   

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wintType1">¿Horario en que se puede marcar?</label>
                                                            <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="">Selecciona una opciòn</option>
                                                                <option value="Banquet">00:00</option>
                                                                <option value="Banquet">00:30</option>
                                                                <option value="Banquet">01:00</option>
                                                                <option value="Banquet">01:30</option>
                                                                <option value="Banquet">02:00</option>
                                                                <option value="Banquet">02:30</option>
                                                                <option value="Banquet">03:00</option>
                                                                <option value="Banquet">03:30</option>
                                                                <option value="Banquet">04:00</option>
                                                                <option value="Banquet">04:30</option>
                                                                <option value="Fund Raiser">05:00</option>
                                                                <option value="Dinner Party">05:30</option>
                                                                <option value="Banquet">06:00</option>
                                                                <option value="Banquet">06:30</option>
                                                                <option value="Banquet">07:00</option>
                                                                <option value="Banquet">07:30</option>
                                                                <option value="Banquet">08:00</option>
                                                                <option value="Banquet">08:30</option>
                                                                <option value="Banquet">09:00</option>
                                                                <option value="Banquet">09:30</option>
                                                                <option value="Banquet">10:00</option>
                                                                <option value="Banquet">10:30</option>
                                                                <option value="Banquet">11:00</option>
                                                                <option value="Banquet">11:30</option>
                                                                <option value="Banquet">12:00</option>
                                                                <option value="Banquet">12:30</option>
                                                                <option value="Banquet">13:00</option>
                                                                <option value="Banquet">13:30</option>
                                                                <option value="Banquet">14:00</option>
                                                                <option value="Banquet">14:30</option>
                                                                <option value="Banquet">15:00</option>
                                                                <option value="Banquet">15:30</option>
                                                                <option value="Banquet">16:00</option>
                                                                <option value="Banquet">16:30</option>
                                                                <option value="Banquet">17:00</option>
                                                                <option value="Banquet">17:30</option>
                                                                <option value="Banquet">18:00</option>
                                                                <option value="Banquet">18:30</option>
                                                                <option value="Banquet">19:00</option>
                                                                <option value="Banquet">19:30</option>
                                                                <option value="Banquet">20:00</option>
                                                                <option value="Banquet">20:30</option>
                                                                <option value="Banquet">21:00</option>
                                                                <option value="Banquet">21:30</option>
                                                                <option value="Banquet">22:00</option>
                                                                <option value="Banquet">22:30</option>
                                                                <option value="Banquet">23:00</option>
                                                                <option value="Banquet">23:30</option>
                                                            
                                                            </select>
                                                        
                                                    </div>

                                                </div>                    
                                            </div>        
                                        </div>
                                        <div class="row" style="display: none" id="ViolenciaFamiliar">
                                            <h3>Violencia Familiar</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿Esta deacuerdo con recibir una llamada de seguimiento? :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>     
                                                    
                                                    </div>   

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wintType1">¿Horario en que se puede marcar?</label>
                                                            <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="">Selecciona una opciòn</option>
                                                                <option value="Banquet">00:00</option>
                                                                <option value="Banquet">00:30</option>
                                                                <option value="Banquet">01:00</option>
                                                                <option value="Banquet">01:30</option>
                                                                <option value="Banquet">02:00</option>
                                                                <option value="Banquet">02:30</option>
                                                                <option value="Banquet">03:00</option>
                                                                <option value="Banquet">03:30</option>
                                                                <option value="Banquet">04:00</option>
                                                                <option value="Banquet">04:30</option>
                                                                <option value="Fund Raiser">05:00</option>
                                                                <option value="Dinner Party">05:30</option>
                                                                <option value="Banquet">06:00</option>
                                                                <option value="Banquet">06:30</option>
                                                                <option value="Banquet">07:00</option>
                                                                <option value="Banquet">07:30</option>
                                                                <option value="Banquet">08:00</option>
                                                                <option value="Banquet">08:30</option>
                                                                <option value="Banquet">09:00</option>
                                                                <option value="Banquet">09:30</option>
                                                                <option value="Banquet">10:00</option>
                                                                <option value="Banquet">10:30</option>
                                                                <option value="Banquet">11:00</option>
                                                                <option value="Banquet">11:30</option>
                                                                <option value="Banquet">12:00</option>
                                                                <option value="Banquet">12:30</option>
                                                                <option value="Banquet">13:00</option>
                                                                <option value="Banquet">13:30</option>
                                                                <option value="Banquet">14:00</option>
                                                                <option value="Banquet">14:30</option>
                                                                <option value="Banquet">15:00</option>
                                                                <option value="Banquet">15:30</option>
                                                                <option value="Banquet">16:00</option>
                                                                <option value="Banquet">16:30</option>
                                                                <option value="Banquet">17:00</option>
                                                                <option value="Banquet">17:30</option>
                                                                <option value="Banquet">18:00</option>
                                                                <option value="Banquet">18:30</option>
                                                                <option value="Banquet">19:00</option>
                                                                <option value="Banquet">19:30</option>
                                                                <option value="Banquet">20:00</option>
                                                                <option value="Banquet">20:30</option>
                                                                <option value="Banquet">21:00</option>
                                                                <option value="Banquet">21:30</option>
                                                                <option value="Banquet">22:00</option>
                                                                <option value="Banquet">22:30</option>
                                                                <option value="Banquet">23:00</option>
                                                                <option value="Banquet">23:30</option>
                                                            
                                                            </select>
                                                        
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Telefono de Casa : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Telefono de Oficina : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Telefono Celular : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Telefono de Recados : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Telefono Familiar : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                    
                                                        <label>Tipo de Violencia</label>
                                                        <div class="input-group">
                                                            <ul class="icheck-list">
                                                                <li>
                                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                                    <label for="minimal-checkbox-1">Fisica</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                                                                    <label for="minimal-checkbox-2">Psicologica</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                                    <label for="minimal-checkbox-1">Económica</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                                                                    <label for="minimal-checkbox-2">Patrimonial</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                                                                    <label for="minimal-checkbox-2">Sexual</label>
                                                        
                                                                </li>

                                                        </div>  
                                                    </div>
                                                </div>               
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wintType1">Temporalidad de la violencia</label>
                                                            <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="">Selecciona una Opciòn</option>
                                                                <option value="Banquet">Màs de un mes</option>
                                                                <option value="Banquet">1-7 años</option>
                                                                <option value="Fund Raiser">8-14 años</option>
                                                                <option value="Dinner Party">Evento ùnico</option>
                                                                <option value="Banquet">Desconoce</option>
                                                            </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="wintType1">Frecuencia de la violencia</label>
                                                            <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="">Selecciona una opciòn</option>
                                                                <option value="Banquet">Diario</option>
                                                                <option value="Fund Raiser">Semanal</option>
                                                                <option value="Dinner Party">Mensual</option>
                                                                <option value="Banquet">Anual</option>
                                                                <option value="Banquet">Evento ùnico</option>
                                                                <option value="Banquet">Desconoce</option>
                                                            </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wintType1">Ocupaciòn :</label>
                                                            <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="">Selecciona una opciòn</option>
                                                                <option value="Banquet">Profesionista</option>
                                                                <option value="Banquet">Empleado</option>
                                                                <option value="Banquet">Desempleado</option>
                                                                <option value="Banquet">Ama de Casa</option>
                                                                <option value="Fund Raiser">Obrero</option>
                                                                <option value="Dinner Party">Estudiante</option>
                                                                <option value="Dinner Party">Otro</option>
                                                                <option value="Banquet">Sin Dato</option>
                                                            </select>
                                                    </div>  
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿Tienes hijos (as)? :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>     
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">¿Cuantos? : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">¿De que edad? : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>                
                                            </div>                    
                                        </div>
                                        <div class="row" style="display: none" id="CorrupcionPolicial">
                                            <h3>Comisión Ciudadana contra la corrupción policial</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>La persona que habla es policia?:</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label> 
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="wlocation2">De que Coorporación es : <span class="danger">*</span> </label>
                                                            <select class="custom-select form-control " id="wlocation2" name="location">
                                                                <option value="">Selecciona una opciòn</option>
                                                                <option value="">Policìa Preventiva</option>
                                                                <option value="">Policìa Industrial</option>
                                                                <option value="">Policìa Auxiliar</option>
                                                                <option value="">Policìa Transito</option>
                                                                <option value="">Otro</option>
                                                                
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label for="wfirstName2"> Especifique : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2">Quien llama es : <span class="danger">*</span> </label>
                                                            <select class="custom-select form-control " id="wlocation2" name="location">
                                                                <option value="">Selecciona una opciòn</option>
                                                                <option value="">Testigo</option>
                                                                <option value="">Vìctima</option>
                                                                
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Procede como reporte Policia? :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label> 
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                
                                    
                                        <div class="row" style="display: none" id="MujeresPolicia">
                                            <h3>Comisión Ciudadana contra la Violencia Mujeres Policìa</h3>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>La persona que habla es policia?:</label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label> 
                                                        
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="wlocation2">De que Coorporación es : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control " id="wlocation2" name="location">
                                                            <option value="">Selecciona una opciòn</option>
                                                            <option value="">Policìa Preventiva</option>
                                                            <option value="">Policìa Industrial</option>
                                                            <option value="">Policìa Auxiliar</option>
                                                            <option value="">Policìa Transito</option>
                                                            <option value="">Otro</option>
                                                            
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="wfirstName2"> Especifique : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName"> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2">Quien llama es : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control " id="wlocation2" name="location">
                                                            <option value="">Selecciòna una opciòn</option>
                                                            <option value="">Testigo</option>
                                                            <option value="">Vìctima</option>
                                                            
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                
                                    
                                        <div class="row"  id="ReporteRed" style="display: none"> 
                                            <h3>Captura de Reporte Red</h3>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Folio : <p>RED-</p><input type="text" class="form-control" id="wfirstName2" name="firstName"><span class="danger">*</span><button type="button" class="btn btn-primary">Solicita Folio</button></label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <br></br>
                                                    <label for="wlocation2"> Tipo de Delito  : <span class="danger">*</span> </label>
                                                    
                                                    <select class="custom-select form-control" id="wlocation2" name="location">
                                                        <option value="">Local</option>
                                                        <option value="India">Foranea</option>
                                                        <option value="USA">Extranjero</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="wfirstName2"> Especifique : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName"> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2">Quien llama es : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control " id="wlocation2" name="location">
                                                            <option value="">Selecciòna una opciòn</option>
                                                            <option value="">Testigo</option>
                                                            <option value="">Vìctima</option>
                                                            
                                                        </select>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <div class="row" id="plateada" style="display: none">
                                            <h3>Linea Plateada </h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿Se esta comunicando el adulto mayor?  :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input value="ReportanteSi" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input value="ReportanteNo" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

      
                                        <div class="row" style="display: none" id="reportante">
                                            <h3>Datos del Reportante</h3>
                                            <div class="row">    
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        
                                                        <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                                        
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                        
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Edad : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Telefono : <span class="danger">*</span> </label>
                                                        <br> </br>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>¿Que parentesco tiene con el adulto mayor?</p>
                                                        <label for="wfirstName2"> Parentesco : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                            </div>    
                                            
                                        </div>
                                        <div class="row" style="display: none" id="DatosPersona">
                                            <h3>Datos de la persona</h3>
                                                <div class="row">    
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            
                                                            <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                                            
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                                            
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2"> Apellido Paterno : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2"> Apellido Materno : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                                    </div>
                                                    <div class="col-md-6"  id="">
                                                        <div class="form-group">
                                                        <label for="wlocation2"> Edad : <span class="danger">*</span> </label>
                                                            <select class="custom-select form-control" id="" name="">
                                                                
                                                                <option value="">Selecciona una opcion</option>
                                                                <?php foreach ($edad as $cedad): ?>
                                                                    <option value="<?php echo $cedad['CON_ID']?>"><?php echo $cedad['CON_DESCRIPCION']?></option>
                                                                <?php endforeach; ?>
                                                            </select>        
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wjobTitle2">Telefono :</label>
                                                            <input type="number" class="form-control required" id="wjobTitle2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2">Codigo Postal : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2">Colonia : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2">Estado : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2">Alcaldìa : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2">Calle : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2">Numero Interior : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wfirstName2">Numero Exterior : <span class="danger">*</span> </label>
                                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>¿Usted es derechohabiente?  :</label>
                                                                <label class="custom-control custom-radio">
                                                                    <input value="SeSoSi" name="radio" type="radio" class="custom-control-input">
                                                                    <span class="custom-control-label">Si</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input value="SeSoNo" name="radio" type="radio" class="custom-control-input">
                                                                    <span class="custom-control-label">No</span>
                                                                </label>
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="display: none" id="seguridadSocial">
                                                        <div class="form-group">
                                                            <label for="wlocation2"> Indique la instituciòn : <span class="danger">*</span> </label>
                                                            <select class="custom-select form-control required" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                                <option value="">Selecciona una opciòn</option>
                                                                <option value="1">IMSS</option>
                                                                <option value="2">ISSSTE</option>
                                                                <option value="3">SEDENA</option>
                                                                <option value="4">OTROS</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>¿Cuenta con pensiòn alimentaria del Gobierno de la CDMX?  :</label>
                                                                <label class="custom-control custom-radio">
                                                                    <input value="" name="radio" type="radio" class="custom-control-input">
                                                                    <span class="custom-control-label">Si</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input value="" name="radio" type="radio" class="custom-control-input">
                                                                    <span class="custom-control-label">No</span>
                                                                </label>
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿Sabe leer y escribir?  :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input value="" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input value="" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                    <h3>Salud</h3>
                                                </div>                
                                            </div>    
                                            <div class="row" id="salud"  >
                                        
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿tiene algùna incapacidad fìsica para comprar, preparar y/o consumir sus alimentos:</label>
                                                            <label class="custom-control custom-radio">
                                                                <input value="IncaSi" name="Incapacidad" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input value="IncaNo" name="Incapacidad" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>¿Padece algun(as) enfermedad(es)?:</label>
                                                            
                                                            <label class="custom-control custom-radio">
                                                                <input value="padece" name="PadeceEnfermedad" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input value="nopadece" name="PadeceEnfermedad" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="display : none" id="cual">
                                                    <div class="form-group">
                                                        <label for="wjobTitle2">Cuales :</label>
                                                        <input type="text" class="form-control" id="wjobTitle2">
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                        <!--<h3>Con Quien Vive</h3>                              
                                        
                                        <div class="row"  id="ViveCon">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>¿Con quièn vive? :</label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="solo" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Solo</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="acompañado" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Acompañado</span>
                                                        </label>
                                                        
                                                </div>
                                            </div>
                                            <div class="row" style="display: none" id="vive">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                                        <br> </br>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p>¿Que parentesco tiene con el adulto mayor?</p>
                                                        <label for="wfirstName2"> Parentesco : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Edad : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                    
                                                    
                                                
                                            </div>
                                        </div>
                                        <!--<h3>Salud</h3>
                                        <div class="row" id="salud" style="display : none" >
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>¿tiene algùna incapacidad fìsica para comprar, preparar y/o consumir sus alimentos:</label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label>
                                                        
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>¿Padece algun(as) enfermedad(es)?:</label>
                                                        
                                                        <label class="custom-control custom-radio">
                                                            <input value="padece" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="nopadece" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label>
                                                        
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="display : none" id="cual">
                                                <div class="form-group">
                                                    <label for="wjobTitle2">Cuales :</label>
                                                    <input type="text" class="form-control" id="wjobTitle2">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Motivo de la llamada :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Observaciònes :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Se canaliza : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                        </div>-->
                                        <!--<h3>INVEA</h3>                            
                                        <h4>Datos Establecimiento o Inmueble</h4>  
                                        <div class="row" style="display : none" id="EstablecimientoInmueble">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2">giro Mercantil : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                        <option value="">Selecciona una opciòn</option>
                                                        <option value="">Hombre</option>
                                                        <option value=>Mujer</option>
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Especifique el tipo : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Denominaciòn o Razon Social : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Codigo Postal : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Colonia : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Estado : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Alcaldìa : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Calle : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Numero Interior : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">Numero Exterior : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Referencias :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                                
                                        </div>   
                                        <h3>Datos de los hechos</h3>
                                        <div class="row" style="display : none" id="DatosHechos">    
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Fecha  : <span class="danger">*</span> </label>
                                                    <input type="date" class="form-control" id="wfirstName2" name="firstName"> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Hora aproximada  : <span class="danger">*</span> </label>
                                                    <input type="time" class="form-control" id="wfirstName2" name="firstName"> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Datos de algùn Vehìculo :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Descripciòn de los hechos :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2">Problematica : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                        <option value="">Selecciona una opciòn</option>
                                                        <option value="">Hombre</option>
                                                        <option value="">Mujer</option>
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Observaciònes o Comentarios :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>    
                                        <h3>Trasporte Seguro</h3>
                                        <div class="row" style="display: none" id="TransporteSeguro">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tipo de llamada :</label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Anònimo</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Identificado</span>
                                                        </label> 
                                                        
                                                </div>
                                            </div>
                                        </div>
                            
                                        <h4>Datos de la Persona</h4>  
                                        <div class="row" style="display: none" id="DatosPersona">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2">Sexo : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                        <option value="">Selecciona una opciòn</option>
                                                        <option value="">Hombre</option>
                                                        <option value="">Mujer</option>
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wintType1">Edad :</label>
                                                        <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                            <option value="">Selecciona una opciòn</option>
                                                            <option value="Banquet">0-3 años</option>
                                                            <option value="Fund Raiser">0-6 años</option>
                                                            <option value="Dinner Party">7-11 años</option>
                                                            <option value="Dinner Party">12-15 años</option>
                                                            <option value="Dinner Party">18-20 años</option>
                                                            <option value="Dinner Party">21-25 años</option>
                                                            <option value="Dinner Party">26-30 años</option>
                                                            <option value="Dinner Party">31-35 años</option>
                                                            <option value="Dinner Party">36-40 años</option>
                                                            <option value="Dinner Party">41-45 años</option>
                                                            <option value="Dinner Party">46-50 años</option>
                                                            <option value="Dinner Party">51-55 años</option>
                                                            <option value="Dinner Party">56-60 años</option>
                                                            <option value="Dinner Party">61-65 años</option>
                                                            <option value="Dinner Party">66-70 años</option>
                                                            <option value="Dinner Party">Màs de 70 años</option>
                                                        </select>
                                                </div>  
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Telefono : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Codigo Postal : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Colonia : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Estado : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Alcaldìa : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Calle : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Numero Interior : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Numero Exterior : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                            </div>
                               
                                            <h3>Tipo de medio de Transporte</h3>
                                            <div class="row" style="display: none" id="MedioTransporte">    
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2">Tipo de Transporte : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                            <option value="">Selecciona una opciòn</option>
                                                            <option value="">Preescolar</option>
                                                            <option value="">Primaria</option>
                                                            <option value="">Secundaria</option>
                                                            <option value="">Media Superior</option>
                                                            <option value="">superior</option>
                                                            <option value="">Sin dato</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Ruta : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Placa : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Trayecto : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2">Cromàtico : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                            <option value="">Selecciona una opciòn</option>
                                                            <option value="foraneo">Preescolar</option>
                                                            <option value="local">Primaria</option>
                                                            <option value="local">Secundaria</option>
                                                            <option value="local">Media Superior</option>
                                                            <option value="local">superior</option>
                                                            <option value="local">Sin dato</option>
                                                            
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Datos de los Hechos</h3>
                                            <div class="row" style="display: none" id="DatosHechos">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Fecha : <span class="danger">*</span> </label>
                                                        <input type="date" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2"> Hora : <span class="danger">*</span> </label>
                                                        <input type="time" class="form-control" id="wfirstName2" name="firstName"> </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Codigo Postal : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="wlocation2"> Estado : <span class="danger">*</span> </label>
                                                            <select class="custom-select form-control" id="" name="tc_entidades">
                                                                <option value="">Selecciona una opcion</option>
                                                                <?php foreach ($tc_entidades as $key => $data): ?>
                                                                <option value="<?php echo $data->C_ESTADO ?>"><?php echo $data->D_ESTADO?></option>
                                                                <?php endforeach; ?>
                                                            </select> 
                                                        </div>
                                                    </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Delegaciòn: <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Calle : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Referencia y/o entre calles : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2">Problematica : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                            <option value="">Selecciona una opciòn</option>
                                                            <option value="">Ciudad de Mèxico</option>
                                                            <option value="">Mèxico</option>
                                                            
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="shortDescription3">Narraciòn de los Hechos :</label>
                                                        <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Hay Presuntos Responsables :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">No</span>
                                                            </label> 
                                                            
                                                    </div>
                                                </div>
                                            </div>-->    
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
