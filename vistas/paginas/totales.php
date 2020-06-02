
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
    <title>Consejo Ciudadano</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminpro/" />
    <!-- Bootstrap Core CSS -->
    <link href="vistas/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vistas/plugins/wizard/steps.css" rel="stylesheet">
    <link href="vistas/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="vistas/css/style.css" rel="stylesheet">
    <!-- You canvistas/m here -->
    <link href="vistas/css/colors/blue.css" id="theme" rel="stylesheet">
                                
    <title>Totales Reporte Ciudadano</title>
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
                        <h3 class="text-themecolor">Totales Reporte Ciudadano</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item active">Form wizards</li>
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
                                <h6>1</h6>
                                <section>
                                <div class="row">
                                    <h3>Datos de la llamada</h3>  
                                    <div class="row">
                                        <div class="col-md-4" id="NoMas">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Nùmero de folio : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control" id="wfirstName2" name="FolioTrata"> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="wintType1">Origen de llamada:</label>
                                                    <select class="custom-select form-control " id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="">Selecciona una opciòn</option>

                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="wintType1">Tipo de llamada :</label>
                                                    <select class="custom-select form-control " id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="">Selecciona una opciòn</option>
                                                        option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Datos de la llamada</h3>  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Fecha del reporte (desde) : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control" id="wfirstName2" name="NombreDenunciante"> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wintType1">Origen de llamada:</label>
                                                    <select class="custom-select form-control " id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="">Selecciona una opciòn</option>

                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wintType1">Tipo de llamada :</label>
                                                    <select class="custom-select form-control " id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                                                        <option value="">Selecciona una opciòn</option>
                                                        option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <h3>Datos del denunciante</h3>  
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2"> Sexo : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location">
                                                    <option value="">Selecciona una opciòn</option>
                                                    <option value="hombre">Hombre</option>
                                                    <option value="mujer">Mujer</option>
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wjobTitle2">Telefono Identificador de llamadas :</label>
                                                <input type="text" class="form-control" id="wjobTitle2">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2"> Origen del Usuario : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                    <option value="">Selecciona una opciòn</option>
                                                    <option value="foraneo">Foraneo</option>
                                                    <option value="local">Local</option>
                                                    <option value="extranjero">Extranjero</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="display: none" id="foraneo">
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
                                        <div class="col-md-6" style="display: none">
                                            <div class="form-group">
                                                <label for="wlocation2"> Alcaldía : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location">
                                                    <option value="">Selecciona una opciòn</option>
                                                    <option value="Tlalpan">Tlalpan</option>
                                                    <option value="Venustiano Carranza">Venustiano Carranza</option>
                                                    <option value="Iztapalapa">Iztapalapa</option>
                                                    <option value="USA">Iztacalco</option>
                                                    <option value="USA">Miguel Hidalgo</option>
                                                    <option value="USA">La Magdalena Contreras</option>
                                                    <option value="USA">Coyoacán</option>
                                                    <option value="USA">Milpa Alta</option>
                                                    <option value="USA">Tláhuac</option>
                                                    <option value="USA">Benito Juárez</option>
                                                    <option value="USA">Cuajimalpa de Morelos</option>
                                                    <option value="USA">Gustavo A. Madero</option>
                                                    <option value="USA">Cuauhtémoc</option>
                                                    <option value="USA">Álvaro Obregón</option>
                                                    <option value="USA">Xochimilco</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="display: none">
                                            <div class="form-group">
                                                <label for="wlocation2"> País : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control " id="" name="paises">
                                                    
                                                    <option value=" ">Selecciona una opciòn </option>
                                                    <?php foreach($paises as $key => $data) : ?>
                                                        <option value="<?php echo $data->PA_ID ?>"><?php echo $data->PA_NOMBRE ?></option>

                                                    <?php endforeach; ?>    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Extorsión Telefónica/Fraude</h3>  
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2"> Probable conducta delictiva : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                    <option value="">Selecciona una opciòn</option>
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2"> Exigencia Requerida: <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                    <option value="">Selecciona una opciòn</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2"> Forma en la que se realiza el contacto: <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                    <option value="">Selecciona una opciòn</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2">Tipo de Telefóno en que recibe la llamada : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                    <option value="">Selecciona una opciòn</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlastName2"> Número del que le llaman: <span class="danger">*</span> </label>
                                                <input type="text" class="form-control " id="wlastName2" name="ApellidoPaterno"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Número del que le envian el mensaje: <span class="danger">*</span> </label>
                                                <input type="text" class="form-control" id="wfirstName2" name="ApellidoMaterno"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Número al que le piden comunicarse: <span class="danger">*</span> </label>
                                                <input type="text" class="form-control" id="wfirstName2" name="ApellidoMaterno"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2"> Lugar en que se recibe la llamada  : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location">
                                                    <option value="">Selecciona una opciòn</option>
                                                    
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2">Estatus de los hechos : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location">
                                                    <option value="">Selecciona una opciòn</option>
                                                    
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="display: none" id="foraneo">
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
                                        <div class="col-md-6" style="display: none">
                                            <div class="form-group">
                                                <label for="wlocation2"> Alcaldía : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control" id="wlocation2" name="location">
                                                    <option value="">Selecciona una opciòn</option>
                                                    <option value="Tlalpan">Tlalpan</option>
                                                    <option value="Venustiano Carranza">Venustiano Carranza</option>
                                                    <option value="Iztapalapa">Iztapalapa</option>
                                                    <option value="USA">Iztacalco</option>
                                                    <option value="USA">Miguel Hidalgo</option>
                                                    <option value="USA">La Magdalena Contreras</option>
                                                    <option value="USA">Coyoacán</option>
                                                    <option value="USA">Milpa Alta</option>
                                                    <option value="USA">Tláhuac</option>
                                                    <option value="USA">Benito Juárez</option>
                                                    <option value="USA">Cuajimalpa de Morelos</option>
                                                    <option value="USA">Gustavo A. Madero</option>
                                                    <option value="USA">Cuauhtémoc</option>
                                                    <option value="USA">Álvaro Obregón</option>
                                                    <option value="USA">Xochimilco</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="display: none">
                                            <div class="form-group">
                                                <label for="wlocation2"> País : <span class="danger">*</span> </label>
                                                <select class="custom-select form-control " id="" name="paises">
                                                    
                                                    <option value=" ">Selecciona una opciòn </option>
                                                    <?php foreach($paises as $key => $data) : ?>
                                                        <option value="<?php echo $data->PA_ID ?>"><?php echo $data->PA_NOMBRE ?></option>

                                                    <?php endforeach; ?>    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Programas Especiales:</h3>
                                <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="wlocation2"> Pertenece a un programa especial: : <span class="danger">*</span> </label>
                                            <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                <option value="">Selecciona una opciòn</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h3>Terminación de la llamada:</h3>
                                <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="wlocation2"> Terminación de la llamada : <span class="danger">*</span> </label>
                                            <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                <option value="">Selecciona una opciòn</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h3>Quien capturo el reporte</h3>
                                <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="wlocation2"> Quien capturo el reporte: <span class="danger">*</span> </label>
                                            <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                <option value="">Selecciona una opciòn</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h3>Relevante</h3>
                                <div class="row">
                                   <div class="col-md-6">
                                        <br>
                                        <button type="button" onclick="alert('¡marcado como relevante!')" value="Click para ver un mensaje de alerta" class="btn btn-outline-success btn-rounded"><i class="fa fa-check"></i> Success</button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Total de registros : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control" id="wfirstName2" name="ApellidoMaterno"> </div>
                                    </div>
                                </div>
                                <h3>Registros de Denuncia Ciudadana</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Total de registros : <span class="danger">*</span> </label>
                                            <input type="text" class="form-control" id="wfirstName2" name="ApellidoMaterno"> </div>
                                    </div>
                                </div>
                                </section>
                                <!-- Step 2 -->
                                     
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
        <script>
            window.onload = function(){
                if(window.jQuery){
                    $("#necesidad").change(function(){
                        var texto = $("#necesidad").val();
                        var texto2 = $(this).val();
                        console.log(texto);
                        switch (texto) {
                            case 'reportealm.p.':
                            //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
                            
                                console.log("reporte al mp");
                                  
                            break;
                            case 'personadesaparecida':
                                console.log("persona desaparecida");
                                
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                                break;
                            case 'alcoholimetro':
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
                                console.log("alcoholimetro");
                            break;
                            case 'covid-19':
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
                                console.log("covid-19");
                            break;
                            case 'violenciafamiliar':
                                
                                $("#ViolenciaFamiliar").css('display','block');
                                $("#CorrupcionPolicial").css('display','none');
                                $("#ExtorcionTelefonica").css('display','none');
                                $("#MaltratoInfantil").css('display','none');
                                $("#ProteccionAnimales").css('display','none');
                                $("#suicidio").css('display','none');
                                $("#ReporteRed").css('display','none');

                                
                            break; 
                            case 'terminalesseguras':
                                console.log("terminalesseguras");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'migrantes':
                                console.log("migrantes");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'cortada/equivocada':
                                console.log("cortada/equivocada");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'informativa':
                                console.log("informativa");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'reportepolicias':
                                
                                $("#CorrupcionPolicial").css('display','block');
                                $("#ExtorcionTelefonica").css('display','none');
                                $("#MaltratoInfantil").css('display','none');
                                $("#ProteccionAnimales").css('display','none');
                                $("#ViolenciaFamiliar").css('display','none');
                                $("#suicidio").css('display','none');
                                $("#ReporteRed").css('display','none');
                               
                            break;
                            case 'robodevehiculos':
                                console.log("robodevehiculos");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'nomasextorsiones':
                                
                                $("#ExtorcionTelefonica").css('display','block');
                                $("#MaltratoInfantil").css('display','none');
                                $("#ProteccionAnimales").css('display','none');
                                $("#CorrupcionPolicial").css('display','none');
                                $("#ViolenciaFamiliar").css('display','none');
                                $("#suicidio").css('display','none');
                                $("#ReporteRed").css('display','none');

                                
                            break;
                            case 'actividaddelictiva':
                                console.log("actividaddelictiva");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'orientacionjuridica':
                                console.log("orientacionjuridica");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'companimal':
                                console.log("entro");
                                $("#MaltratoInfantil").css('display','none');
                                $("#ProteccionAnimales").css('display','block');
                                $("#CorrupcionPolicial").css('display','none');
                                $("#ViolenciaFamiliar").css('display','none');
                                $("#suicidio").css('display','none');
                                $("#ExtorcionTelefonica").css('display','none');
                                $("#ReporteRed").css('display','none');

                                   

                                
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'maltratoinfantil':
                                
                                $("#MaltratoInfantil").css('display','block');
                                $("#ProteccionAnimales").css('display','none');
                                $("#CorrupcionPolicial").css('display','none');
                                $("#ViolenciaFamiliar").css('display','none');
                                $("#suicidio").css('display','none');
                                $("#ExtorcionTelefonica").css('display','none');
                                $("#ReporteRed").css('display','none');
                               
                            break;
                            case 'sistemaalertasocial':
                                console.log("sistemaalertasocial");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'sidec':
                                console.log("sidec");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'establecimientosmercantiles':
                                console.log("establecimientosmercantiles");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'transporte':
                                console.log("transporte");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'apoyopsicologico':
                                console.log("apoyopsicologico");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'suicidio':
                                
                                $("#suicidio").css('display','block');
                                $("#ViolenciaFamiliar").css('display','none');
                                $("#CorrupcionPolicial").css('display','none');
                                $("#ExtorcionTelefonica").css('display','none');
                                $("#MaltratoInfantil").css('display','none');
                                $("#ProteccionAnimales").css('display','none');
                                $("#ReporteRed").css('display','none');
                               
                            break;
                            case 'emergencias':
                                console.log("emergencias");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'reordenamientodetrabajadoresnoasalariados':
                                console.log("reordenamientodetrabajadoresnoasalariados");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'protejamosanuestrosjovenes':
                                console.log("protejamosanuestrosjovenes");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'personasensituaciondecalle':
                                console.log("personasensituaciondecalle");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'culturacivica':
                                console.log("culturacivica");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            case 'otros':
                                console.log("otros");
                               
                                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
                            break;
                            default:
                                $("#suicidio").css('display','none');
                                $("#ViolenciaFamiliar").css('display','none');
                                $("#CorrupcionPolicial").css('display','none');
                                $("#ExtorcionTelefonica").css('display','none');
                                $("#MaltratoInfantil").css('display','none');
                                $("#ProteccionAnimales").css('display','none');
                                $("#ReporteRed").css('display','none');        
                            }
                            
                        
                    });
                
                        
                }
            };
                 
            
        
        </script>
</body>
</html>
