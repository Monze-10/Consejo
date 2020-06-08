<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set("memory_limit", "-1");






require_once "controladores/captura.controlador.php";
require_once "modelos/captura.modelo.php";
require_once "controladores/tabla.controlador.php";
require_once "modelos/reporte.modelo.php";
//require_once "controladores/log.controlador.php";    <---- Esta no se ocupa por ahora(creo)

$tabla = new ControladorTabla();
$tabla -> ctrReporteCiudadano();

$captura = new ControladorCaptura();
$captura -> crtMostrarCiudad();
$captura -> crtMostrarNecesidad();
$captura -> crtMostrarPais();
$captura -> crtMostrarDetalle();
$captura -> crtMostrarDelito();











$ciudad =  ControladorCaptura::crtMostrarCiudad();
$pais =  ControladorCaptura::crtMostrarPais();
$necesidad = ControladorCaptura::crtMostrarNecesidad();
$detalle = ControladorCaptura::crtMostrarDetalle();
$delito = ControladorCaptura::crtMostrarDetalle();
$edad = ControladorCaptura::crtMostrarEdad();
$sexo = ControladorCaptura::crtMostrarSexo();
$alcaldia = ControladorCaptura::crtMostrarAlcaldia();
$canaliza = ControladorCaptura::crtMostrarCanaliza();
$conducta = ControladorCaptura::crtMostrarConducta();
$contacto = ControladorCaptura::crtMostrarContacto();
$forma = ControladorCaptura::crtMostrarForma();
$hechos = ControladorCaptura::ctrMostrarHecho();
$llamada = ControladorCaptura::ctrMostrarLlamada();
$escolar = ControladorCaptura::ctrMostrarEscolar();
$ocupacion = ControladorCaptura::ctrMostrarOcupacion();
$civil = ControladorCaptura::ctrMostrarEdoCivil();
$social = ControladorCaptura::ctrMostrarSsocial();
$etapa = ControladorCaptura::ctrMostrarEtapa();
$enfermedad = ControladorCaptura::ctrMostrarEnfermedad();
$vive = ControladorCaptura::ctrMostrarVive();
$observa = ControladorCaptura::ctrMostrarObserva();
$parentesco = ControladorCaptura::ctrMostrarParentesco();
$age = ControladorCaptura::ctrMostrarAge();
$ocupa = ControladorCaptura::ctrMostrarOcupa();
$esc = ControladorCaptura::ctrMostrarGrado();
$mal= ControladorCaptura::ctrMostrarMaltrato();
$desde = ControladorCaptura::ctrMostrarDesdeC();

//echo '<pre>'; print_r($pais); echo '<pre>'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width"><!-- Validation wizard -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="vistas/images/favicon.png">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/adminpro/" />
    <!-- Bootstrap Core CSS -->
    <link href="vistas/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vistas/plugins/wizard/steps.css" rel="stylesheet">
    <link href="vistas/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="vistas/css/style.css" rel="stylesheet">
    <!-- You canvistas/m here -->
    <link href="vistas/css/colors/blue.css" id="theme" rel="stylesheet">
                                
    <title>Document</title>
</head>
<body>
    <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Reporte Ciudadano</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="controladores/CtrlLogOut.php">Salir</a></li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="col-12">
                    <div class="card wizard-content">
                        <div class="card-body">
                            <h4 class="card-title">Llena con cuidado cada uno de los campos</h4>
                            <h6 class="card-subtitle">Visita nuestro sitio oficial<a href="https://consejociudadanomx.org/index.php/es/" target="_blank"><br></br>Consejo Ciudadano</a></h6>
                            <form action="" method="POST" class="validation-wizard wizard-circle">
                                <!-- Step 1 -->
                                <h6>Datos del Denunciante</h6>
                                <section>  
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Origen de la llamada :</label>
                                                <label class="custom-control custom-radio">
                                                    <input id="" name="LineaSeuridad" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">Linea de seguridad</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="" name="CincoTres" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">*5533</span>
                                                </label> 
                                                <label class="custom-control custom-radio">
                                                    <input id="radio4" name="NueveOnce" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">911</span>
                                                </label> 
                                                <label class="custom-control custom-radio">
                                                    <input id="radio4" name="whats" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">Whatsapp</span>
                                                </label> 
                                                <label class="custom-control custom-radio">
                                                    <input id="radio4" name="turista" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">Turista</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="radio4" name="correo" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">Correo electronico</span>
                                                </label>  
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            
                                                <label class="custom-control custom-radio">
                                                    <input value="NoMasSi" name="trata" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">No mas trata</span>
                                                </label>
                                                    
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="display: none" id="NoMas">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Nùmero de folio : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control" id="wfirstName2" name="FolioTrata"> 
                                        </div>
                                    </div>
                                </div>
                                <h3>Datos del Denunciante</h3>  
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control" id="wfirstName2" name="NombreDenunciante"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wlastName2"> Apellido Paterno : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control " id="wlastName2" name="ApellidoPaterno"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Apellido Materno : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control" id="wfirstName2" name="ApellidoMaterno"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wintType1">Edad :</label>
                                                <select class="custom-select form-control " id="wintType1" data-placeholder="Type to search cities" name="wintType1">
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
                                </div>
                                <div class="row">
                                    <div class="col-md-6"  id="">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wjobTitle2">Telefono Identificador de llamadas :</label>
                                            <input type="text" class="form-control" id="wjobTitle2">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wlocation2"> Origen del Usuario : <span class="danger">*</span> </label>
                                            <select id="origen" name="origen" onchange="ShowOrigen();" class="custom-select form-control" >
                                                <option value="">Selecciona una opciòn</option>
                                                <option value="1">Foraneo</option>
                                                <option value="2">Local</option>
                                                <option value="3">Extranjero</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                               
                                
                                    <div class="col-md-6"  id="foraneo" style="display: none">
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
                               
                                
                                    <div class="col-md-6" style="display: none" id="local">
                                        <div class="form-group">
                                            <label for="wlocation2"> Alcaldía: <span class="danger">*</span> </label>
                                            <select class="custom-select form-control " id="" name="">
                                                
                                                <option value=" ">Selecciona una opciòn </option>
                                                <?php foreach($alcaldia as $calcaldia) : ?>
                                                    <option value="<?php echo $calcaldia['CON_ID']?>"><?php echo $calcaldia['CON_DESCRIPCION']?></option>

                                                <?php endforeach; ?>    
                                                
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6" style="display: none" id="Extranjero">
                                        <div class="form-group">
                                            <label for="wlocation2"> País : <span class="danger">*</span> </label>
                                            <select class="custom-select form-control " id="" name="">
                                                
                                                <option value=" ">Selecciona una opciòn </option>
                                                <?php foreach($pais as $paises) : ?>
                                                    <option value="<?php echo $paises['PA_ID']?>"><?php echo $paises['PA_NOMBRE']?></option>

                                                <?php endforeach; ?>    
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                
                                </section>
                                <!-- Step 2 -->
                                <h6>Descripción de los hechos</h6>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wjobTitle2">Fecha :</label>
                                                <input type="date" class="form-control" id="wjobTitle2">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="webUrl3">Hora :</label>
                                                <input type="datetime" class="form-control" id="wjobTitle2">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h3>¿Cuándo?, ¿Dónde?, ¿Qué?, ¿Con qué?, ¿Quién? y ¿Cómo?</h3>
                                                <label for="shortDescription3">Hechos :</label>
                                                <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                            </div>
                                        </div>
                                   
                                    
                                        <div class="col-md-4" id="">
                                            <div class="form-group">
                                                <label for="wlocation2"> Necesidad : <span class="danger">*</span> </label>
                                                <select id="producto" name="producto" onchange="ShowSelected();"class="custom-select form-control">
                                                    
                                                    <option value=" ">Selecciona una opciòn </option>
                                                    <?php foreach($necesidad as $mnecesidad) : ?>
                                                        <option value="<?php echo $mnecesidad['CON_ID']?>"><?php echo $mnecesidad['CON_DESCRIPCION']?></option>

                                                    <?php endforeach; ?>    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">
                                            <div class="form-group">
                                                <label for="wlocation2"> Catálogo : <span class="danger">*</span> </label>
                                                <select  class="custom-select form-control " id="catalogo" name="catalogo">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">
                                            <div class="form-group">
                                                <label for="wlocation2"> Delito/Infracción : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control " id="" name="">
                                                    
                                                    <option value=" ">Selecciona una opciòn </option>
                                                    <?php foreach($delito as $cdelito) : ?>
                                                        <option value="<?php echo $cdelito['CON_ID']?>"><?php echo $cdelito['CON_DESCRIPCION']?></option>

                                                    <?php endforeach; ?>    
                                                    
                                                </select>
                                            </div>
                                        </div>
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
                                                    <input type="text" class="form-control required" id="wlastName2" name="lastName"> 
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
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName"> 
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlastName2"> Número del que envian el mensaje : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wlastName2" name="lastName"> 
                                                </div>
                                            </div>
                    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlastName2"> Número al que piden comunicarse : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wlastName2" name="lastName"> 
                                                </div>
                                            </div>
                    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlastName2"> Dirección electronica involucrada : <span class="danger">*</span> </label>
                                                    <input type="email" class="form-control required" id="wlastName2" name="lastName"> 
                                                    
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
                                                    <input type="text" class="form-control required" id="wlastName2" name="lastName"> 
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
                                                        <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                            <option value="Banquet">Normal</option>
                                                            <option value="Fund Raiser">Difficult</option>
                                                            <option value="Dinner Party">Hard</option>
                                                        </select>
                                                </div>  
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="wintType1">Gènero :</label>
                                                        <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                            <option value="Banquet">Normal</option>
                                                            <option value="Fund Raiser">Difficult</option>
                                                            <option value="Dinner Party">Hard</option>
                                                        </select>
                                                </div>  
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="wintType1">Canalizaciòn :</label>
                                                        <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
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
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">     
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
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">     
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
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">     
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
                                                        <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
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
                                                        <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
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
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Telefono de Oficina : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Telefono Celular : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Telefono de Recados : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="wfirstName2"> Telefono Familiar : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
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
                                                        <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
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
                                                        <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
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
                                                        <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
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
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wfirstName2">¿De que edad? : <span class="danger">*</span> </label>
                                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName">
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
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> 
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
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> 
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
                                            <label for="wfirstName2"> Folio : <p>RED-</p><input type="text" class="form-control required" id="wfirstName2" name="firstName"><span class="danger">*</span><button type="button" class="btn btn-primary">Solicita Folio</button></label>
                                             
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br></br>
                                            <label for="wlocation2"> Tipo de Delito  : <span class="danger">*</span> </label>
                                            
                                            <select class="custom-select form-control required" id="wlocation2" name="location">
                                                <option value="">Local</option>
                                                <option value="India">Foranea</option>
                                                <option value="USA">Extranjero</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="wfirstName2"> Especifique : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> 
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
                                <h3>Linea Plateada </h3>
                                <div class="row" id="plateada" style="display: none">
                                
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

                                        
                                   
                                
                                
                                <div class="row" style="display: none" id="reportante">
                                    <h3>Datos del Reportante</h3>
                                    <div class="row">    
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                
                                                <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                                
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                                
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Edad : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Telefono : <span class="danger">*</span> </label>
                                                <br> </br>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>¿Que parentesco tiene con el adulto mayor?</p>
                                                <label for="wfirstName2"> Parentesco : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                    </div>    
                                    
                                </div>
                                <h3>Datos de las Persona</h3>
                                <div class="row" style="display: none" id="DatosPersona">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Nombre : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Apellido Paterno : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
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
                                    
                                    <div class="row" id="salud"  >
                                        
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
                                                <input type="text" class="form-control required" id="wjobTitle2">
                                            </div>
                                        </div>
                                    </div>
                                    <h3>¿Con quièn vive?</h3>
                                    
                                </div>
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
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>¿Que parentesco tiene con el adulto mayor?</p>
                                                <label for="wfirstName2"> Parentesco : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Edad : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                            
                                            
                                        
                                    </div>
                                </div>
                                <h3>Salud</h3>
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
                                            <input type="text" class="form-control required" id="wjobTitle2">
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
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                        </div>
                                    </div>
                                </div>
                                <h3>INVEA</h3>                            
                                <h4>Datos Establecimiento o Inmueble</h4>  
                                <div class="row" style="display : none" id="EstablecimientoInmueble">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wlocation2">giro Mercantil : <span class="danger">*</span> </label>
                                            <select class="custom-select form-control required" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                <option value="">Selecciona una opciòn</option>
                                                <option value="">Hombre</option>
                                                <option value=>Mujer</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Especifique el tipo : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2">Denominaciòn o Razon Social : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
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
                                            <input type="date" class="form-control required" id="wfirstName2" name="firstName"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Hora aproximada  : <span class="danger">*</span> </label>
                                            <input type="time" class="form-control required" id="wfirstName2" name="firstName"> 
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
                                            <select class="custom-select form-control required" id="wlocation2" name="location" onChange="mostrar(this.value)";>
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
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wlocation2">Sexo : <span class="danger">*</span> </label>
                                            <select class="custom-select form-control required" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                <option value="">Selecciona una opciòn</option>
                                                <option value="">Hombre</option>
                                                <option value="">Mujer</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wintType1">Edad :</label>
                                                <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
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
                                            <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
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
                                </div>
                               
                                    <h3>Tipo de medio de Transporte</h3>
                                    <div class="row" style="display: none" id="MedioTransporte">    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2">Tipo de Transporte : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control required" id="wlocation2" name="location" onChange="mostrar(this.value)";>
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
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Placa : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Trayecto : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2">Cromàtico : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control required" id="wlocation2" name="location" onChange="mostrar(this.value)";>
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
                                                <input type="date" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Hora : <span class="danger">*</span> </label>
                                                <input type="time" class="form-control required" id="wfirstName2" name="firstName"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2">Codigo Postal : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wlocation2"> Estado : <span class="danger">*</span> </label>
                                                    <select class="custom-select form-control required" id="" name="tc_entidades">
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
                                                <label for="wfirstName2">Referencia y/o entre calles : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2">Problematica : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control required" id="wlocation2" name="location" onChange="mostrar(this.value)";>
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
                                    </div>    
                                </section>
                                <!-- Step 3 -->
                                    <h6>Paso 3</h6>
                                    
                                <section>
                                    <h4>Programas especiales</h4>
                                    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>¿Pertenece a un programa especial?:</label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="si" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="no" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label> 
                                                        
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="display: none" id="ProgramaEspecial">
                                                <div class="form-group">
                                                    <label for="wintType1">¿Cual? :</label>
                                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="">Selecciona una opciòn</option>
                                                        <option value="Banquet">Protejamos a la Condesa</option>
                                                        <option value="Fund Raiser">Protejamos a Nuestro Aereopuerto</option>
                                                        <option value="Dinner Party">Terminales Seguras</option>
                                                        <option value="Dinner Party">Reordenamiento de trabajadores no asalariados</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>¿Lugar de los hechos?:</label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="LugarSi" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="LugarNo" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label> 
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row" id="LugarHechos" style="display: none">
                                            <h3>Lugar de los hechos</h3>
                                            <div class="row">            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Codigo Postal : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wintType1">Colonia</label>
                                                            <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="Banquet">Normal</option>
                                                                <option value="Fund Raiser">Difficult</option>
                                                                <option value="Dinner Party">Hard</option>
                                                            </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2"> Estado : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control required" id="" name="tc_entidades">
                                                            <option value="">Selecciona una opcion</option>
                                                            <?php foreach ($tc_entidades as $key => $data): ?>
                                                            <option value="<?php echo $data->C_ESTADO ?>"><?php echo $data->D_ESTADO?></option>
                                                            <?php endforeach; ?>
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wintType1">Alcaldía</label>
                                                            <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                                <option value="Banquet">Normal</option>
                                                                <option value="Fund Raiser">Difficult</option>
                                                                <option value="Dinner Party">Hard</option>
                                                            </select>
                                                        
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
                                                        <label for="wfirstName2">Número Exterior : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Número Interior : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="wfirstName2">Teléfono : <span class="danger">*</span> </label>
                                                                <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                            </div>
                                                        </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Entre que calles y/o Referencias : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>¿Reportan autos? :</label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="AutoSi" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="AutoNo" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label> 
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row" id="div1" style="display: none">
                                            <h3>Reportan Auto</h3>       
                                            <div class="row">                 
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2"> Marca : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control required" id="" name="marca_vehiculo">
                                                            
                                                            <option value=" ">Selecciona una opciòn </option>
                                                            <?php foreach($marca_vehiculo as $key => $data) : ?>
                                                                <option value="<?php echo $data->M_CveMarca ?>"><?php echo $data->M_DescMarca ?></option>

                                                            <?php endforeach; ?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2"> Submarca : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control required" id="" name="marca_vehiculo">
                                                            
                                                            <option value=" ">Selecciona una opciòn </option>
                                                            <?php foreach($marca_vehiculo as $key => $data) : ?>
                                                                <option value="<?php echo $data->M_CveMarca ?>"><?php echo $data->M_DescMarca ?></option>

                                                            <?php endforeach; ?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wlocation2"> Color : <span class="danger">*</span> </label>
                                                        <select class="custom-select form-control required" id="" name="colores">
                                                            
                                                            <option value=" ">Selecciona una opciòn </option>
                                                            <?php foreach($colores as $key => $data) : ?>
                                                                <option value="<?php echo $data->C_CveColor ?>"><?php echo $data->C_DescColor ?></option>

                                                            <?php endforeach; ?>    
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Número de placas : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Caracteristicas Particulares : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                            </div>           
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>¿Reportan Personas? :</label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="ReportanPersonasSi" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Si</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input value="ReportanPersonasNo" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">No</span>
                                                        </label> 
                                                        
                                                </div>
                                            </div>
                                        <</div>    
                                        
                                        <div class="row" id="PersonasDenunciadas" style="display: none">
                                            <h3>Datos de la(s) Persona(s) Denunciada(s)</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Nombre : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Apellido Paterno : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Apellido Materno : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Alias : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Ocupaciòn : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Edad : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Domicilio : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="wfirstName2">Señas particulares : <span class="danger">*</span> </label>
                                                        <input type="text" class="form-control required" id="wfirstName2" name="firstName">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Filiaciòn de los presuntos</h3>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Color de ojos :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Desconoce</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Verdes</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Cafès</span>
                                                            </label>     
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Negros</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Azules</span>
                                                            </label>
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Nariz :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Desconoce</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Convexa</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Rectilinea</span>
                                                            </label>     
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Concava</span>
                                                            </label>
                                                            
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Color de Cabello :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Desconoce</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Negro</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Rojo</span>
                                                            </label>     
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Rubio</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Castaño</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Cano</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Cafe</span>
                                                            </label>
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cantidad de cabello :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Desconoce</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Escaso</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Abundante</span>
                                                            </label>     
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Normal</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Calvo</span>
                                                            </label>
                                                            
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Complexiòn :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Desconoce</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Mediana</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Grande</span>
                                                            </label>     
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Chico</span>
                                                            </label>
                                                            
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Color de Cabello :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Desconoce</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Regular</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Delgada</span>
                                                            </label>     
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Obesa</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Fornido</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Robusta</span>
                                                            </label>
                                                            
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Color de Piel :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Desconoce</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Negro</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Moreno</span>
                                                            </label>     
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Albino</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Blanco</span>
                                                            </label>
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cejas :</label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Desconoce</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Regulares</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Escasas</span>
                                                            </label>     
                                                            <label class="custom-control custom-radio">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label">Pobladas</span>
                                                            </label>
                                                            
                                                    
                                                    </div>
                                                </div>
                                                        
                                                
                                            </div>    
                                        </div>
                                            
                                </section>
                                
                                <!-- Step 4 -->
                                
                                <h6>Paso 4</h6>
                                <section>
                                    <h3>Observaciones</h3>
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="shortDescription3">Observaciònes :</label>
                                                <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Terminaciòn de la llamada</h3>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wintType1">Terminaciòn de la llamada :</label>
                                                    <select class="custom-select form-control required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="">Selecciona una Opciòn</option>
                                                        <option value="Banquet">Broma</option>
                                                        <option value="Fund Raiser">Usuarios con probable desorden de la realidad</option>
                                                        <option value="Dinner Party">Reporte con datos correctos</option>
                                                        <option value="Banquet">Llamada cerrada en el centro de contacto</option>
                                                    </select>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                            
                                                <label>Relevante</label>
                                                <div class="input-group">
                                                    <ul class="icheck-list">
                                                        <li>
                                                            <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                            <label for="minimal-checkbox-1"></label>
                                                        </li>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>       
                                </section>
                                      
                                        

                                              
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
            <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
        <script src="vistas/plugins/bootstrap/js/popper.min.js"></script>
        <script src="vistas/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="vistas/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="vistas/js/waves.js')?>"></script>
        <!--Menu sidebar -->
        <script src="vistas/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="vistas/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="vistas/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--Custom JavaScript -->
        <script src="vistas/js/RadioButtom.js"></script>
        <script src="vistas/js/custom.min.js"></script>
        <script src="vistas/plugins/moment/moment.js"></script>
        <script src="vistas/plugins/wizard/jquery.steps.min.js"></script>
        <script src="vistas/plugins/wizard/jquery.validate.min.js"></script>
        <!-- Sweet-Alert  -->
        <script src="vistas/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="vistas/plugins/wizard/steps.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="vistas/plugins/styleswitcher/jQuery.style.switcher.js"></script>
         <!-- icheck -->
        <script src="vistas/plugins/icheck/icheck.min.js"></script>
        <script src="vistas/plugins/icheck/icheck.init.js")></script> 
         <!--stickey kit -->
        <script src="vistas/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="vistas/plugins/sparkline/jquery.sparkline.min.js"></script>
        
        

        
</body>
</html>
