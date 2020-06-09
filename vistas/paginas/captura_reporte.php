<?php


    
    include "controladores/captura.controlador.php";
    include "modelos/captura.modelo.php";

    $captura = new ControladorCaptura();

    // $ciudad =  $captura -> crtMostrarCiudad();

    // $pais =  $captura -> crtMostrarPais();
    // $necesidad = $captura -> crtMostrarNecesidad();
    // $detalle = $captura -> crtMostrarDetalle();
    // $delito = $captura -> crtMostrarDetalle();
    // $edad = $captura -> crtMostrarEdad();
    // $sexo = $captura -> crtMostrarSexo();
    // $alcaldia = $captura -> crtMostrarAlcaldia();
    // $canaliza = $captura -> crtMostrarCanaliza();
    // $conducta = $captura -> crtMostrarConducta();
    // $contacto = $captura -> crtMostrarContacto();
    // $forma = $captura -> crtMostrarForma();
    // $hechos = $captura -> ctrMostrarHecho();
    // $llamada = $captura -> ctrMostrarLlamada();
    // $escolar = $captura -> ctrMostrarEscolar();
    // $ocupacion = $captura -> ctrMostrarOcupacion();
    // $civil = $captura -> ctrMostrarEdoCivil();
    // $social = $captura -> ctrMostrarSsocial();
    // $etapa = $captura -> ctrMostrarEtapa();
    // $enfermedad = $captura -> ctrMostrarEnfermedad();
    // $vive = $captura -> ctrMostrarVive();
    // $observa = $captura -> ctrMostrarObserva();
    // $parentesco = $captura -> ctrMostrarParentesco();
    // $age = $captura -> ctrMostrarAge();
    // $ocupa = $captura -> ctrMostrarOcupa();
    // $esc = $captura -> ctrMostrarGrado();
    // $mal= $captura -> ctrMostrarMaltrato();
    // $desde = $captura -> ctrMostrarDesdeC();

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
    <link href="vistas/plugins/wizard/steps.css" rel="stylesheet">
    <link href="vistas/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="vistas/css/style.css" rel="stylesheet">
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
                                <h4 class="card-title">Captura de reporte ciudadano</h4>
                                <h6 class="card-subtitle">Introduce los datos que se te solicitan.</h6>
                                <form class="validation-wizard wizard-circle">
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
                                                    <?php foreach($captura -> crtMostrarSexo() as $csexo){ ?>                                           
                                                        <option value='<?php echo $csexo['CON_ID']; ?>'><?php echo $csexo['CON_DESCRIPCION']; ?></option>
                                                    <?php } ?>
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
                                                    <?php foreach ($captura -> crtMostrarCiudad() as $estado){ ?>
                                                        <option value="<?php echo $estado['C_ESTADO']; ?>"><?php echo $estado['D_ESTADO']; ?></option>
                                                    <?php } ?>
                                                </select>        
                                                    
                                            </div>
                                        </div>
                                
                                    
                                        <div class="col-md-6" style="display: none" id="local">
                                            <div class="form-group">
                                                <label for="wlocation2"> Alcaldía: <span class="danger">*</span> </label>
                                                <select class="custom-select form-control " id="" name="">
                                                    
                                                    <option value=" ">Selecciona una opciòn </option>
                                                    <?php foreach($alcaldia as $calcaldia) { ?>
                                                        <option value="<?php echo $calcaldia['CON_ID']; ?>"><?php echo $calcaldia['CON_DESCRIPCION']; ?></option>
                                                    <?php } ?>    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                
                                        <div class="col-md-6" style="display: none" id="Extranjero">
                                            <div class="form-group">
                                                <label for="wlocation2"> País : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control " id="" name="">
                                                    
                                                    <option value=" ">Selecciona una opciòn </option>
                                                    <?php foreach($captura -> crtMostrarPais() as $paises){ ?>
                                                        <option value="<?php echo $paises['PA_ID']; ?>"><?php echo $paises['PA_NOMBRE']; ?></option>

                                                    <?php } ?>    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Step 2</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jobTitle2">Company Name :</label>
                                                    <input type="text" class="form-control" id="jobTitle2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="webUrl3">Company URL :</label>
                                                    <input type="url" class="form-control" id="webUrl3" name="webUrl3"> </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="shortDescription3">Short Description :</label>
                                                    <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Step 3</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wint1">Interview For :</label>
                                                    <input type="text" class="form-control" id="wint1"> </div>
                                                <div class="form-group">
                                                    <label for="wintType1">Interview Type :</label>
                                                    <select class="custom-select form-control" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="Banquet">Normal</option>
                                                        <option value="Fund Raiser">Difficult</option>
                                                        <option value="Dinner Party">Hard</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="wLocation1">Location :</label>
                                                    <select class="custom-select form-control" id="wLocation1" name="wlocation">
                                                        <option value="">Select City</option>
                                                        <option value="India">India</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Dubai">Dubai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="wjobTitle2">Interview Date :</label>
                                                    <input type="date" class="form-control" id="wjobTitle2">
                                                </div>
                                                <div class="form-group">
                                                    <label>Requirements :</label>
                                                    <div class="m-b-10">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Employee</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                            <span class="custom-control-label">Contract</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Step 4</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="behName1">Behaviour :</label>
                                                    <input type="text" class="form-control required" id="behName1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Confidance</label>
                                                    <input type="text" class="form-control required" id="participants1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="participants1">Result</label>
                                                    <select class="custom-select form-control required" id="participants1" name="location">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comments</label>
                                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Rate Interviwer :</label>
                                                    <div class="c-inputs-stacked">
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-label ml-0">1 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-label ml-0">2 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-label ml-0">3 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-label ml-0">4 star</span> </label>
                                                        <label class="inline custom-control custom-checkbox block">
                                                            <input type="checkbox" class="custom-control-input"> <span class="custom-control-label ml-0">5 star</span> </label>
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
    <script src="vistas/js/RadioButtom.js"></script>
    <script src="vistas/js/script.js"></script>
</body>

</html>