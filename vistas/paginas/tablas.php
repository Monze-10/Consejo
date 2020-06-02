
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set("memory_limit", "-1");
$reporte =  ControladorTabla::ctrReporteCiudadano();
/*echo '<pre>'; print_r($reporte); echo '<pre>'; */

?> 
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width">
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
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Area Validación de Folios</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wlocation2"> Necesidad buscada : <span class="danger">*</span> </label>
                                            <select class="custom-select form-control" id="wlocation2" name="location" onChange="mostrar(this.value)";>
                                                <option value="">Selecciona una opciòn</option>
                                                <option value="foraneo">No màs extorsiones</option>
                                                <option value="local">Actividad delictiva</option>
                                                <option value="extranjero">Orientaciòn jurìdica</option>
                                                <option value="extranjero">Companimal</option>
                                                <option value="extranjero">SIDEC</option>
                                                <option value="extranjero">Establecimientos mercantiles</option>
                                                <option value="extranjero">Transporte</option>
                                                <option value="extranjero">Apoyo Psicològico</option>
                                                <option value="extranjero">Suicidio</option>
                                                <option value="extranjero">Emergencias</option>
                                                <option value="extranjero">Reordenamiento de trabajadores no asalariados</option>
                                                <option value="extranjero">Protejamos a nuestros jòvenes</option>
                                                <option value="extranjero">Personas en situaciòn de calle</option>
                                                <option value="extranjero">Cultura cìvica</option>
                                                <option value="extranjero">Otros</option>
                                                <option value="extranjero">Maltrato infantil</option>
                                                <option value="extranjero">Sistema alerta social</option>
                                                <option value="extranjero">Violencia Familiar</option>
                                                <option value="extranjero">Migrantes</option>
                                                <option value="extranjero">Cortada/Equivocada</option>
                                                <option value="extranjero">Informatìva</option>
                                                <option value="extranjero">Reporte Policìas</option>
                                                <option value="extranjero">Reporte al M.P.</option>
                                                <option value="extranjero">Robo de vehìculos</option>
                                                <option value="extranjero">Terminales seguras</option>
                                                <option value="extranjero">Persona desaparecida</option>
                                                <option value="extranjero">Alcoholìmetro</option>
                                                <option value="extranjero">COVID-19</option>


                                                
                                            </select>
                                        </div>
                                    </div>
                                <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id Reg</th>
                                                <th>Folio</th>
                                                <th>Fecha</th>
                                                <th>Nombre</th>
                                                <th>Telèfono</th>
                                                <th>Telefono Indicador</th>
                                                <th>Origen</th>
                                                <th>Fecha</th>
                                                <th>Hora-Hechos</th>
                                                <th>Necesidad</th>
                                                <th>Catàlogo</th>
                                                <th >Delito/Infracciòn</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id Reg</th>
                                                <th>Folio</th>
                                                <th>Fecha</th>
                                                <th>Nombre</th>
                                                <th>Telèfono</th>
                                                <th>Telefono Indicador</th>
                                                <th>Origen</th>
                                                <th>Fecha de los hechos</th>
                                                <th>Horas-Hechos</th>
                                                <th>Necesidad</th>
                                                <th>Catàlogo</th>
                                                <th>Delito/Infracciòn</th>
                                                
                                               
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php foreach ($reporte as $key => $value): ?>

                                            <tr>
                                                <td><?php echo $value["R_IdReg"]?></td>
                                                <td><?php echo $value["R_Folio"]?></td>
                                                <td><?php echo $value["R_Fecha"]?></td>
                                                <td><?php echo $value["R_Nombre"]?></td>
                                                <td><?php echo $value["R_TelefonoDen"]?></td>
                                                <td><?php echo $value["R_IdenLlamadas"]?></td>
                                                <td><?php echo $value["R_Origen"]?></td>
                                                <td><?php echo $value["R_FechaHechos"]?></td>
                                                <td><?php echo $value["R_HoraHechos"]?></td>
                                                <td><?php echo $value["R_Catalogo"]?></td>
                                                <td><?php echo $value["R_SubCatalogo"]?></td>
                                                <td><?php echo $value["R_SubSubCatalogo"]?></td>
                                            </tr>

                                        <?php endforeach ?>    
                                            
                                          
                                        </tbody>
                                    </table>
                                </div>
                                <br></br>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="shortDescription3">Acciones:</label>
                                        <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                    
                                        <label>Cierre del Reporte</label>
                                        <div class="input-group">
                                            <ul class="icheck-list">
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1"></label>
                                                </li>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                    
                                        <label>Peticiòn de seguimiento</label>
                                        <div class="input-group">
                                            <ul class="icheck-list">
                                                <li>
                                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                                    <label for="minimal-checkbox-1"></label>
                                                </li>
                                        </div>
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Tipo-Usuario : <span class="danger"></span> </label>
                                            <input type="text" class="form-control" id="wfirstName2" name="NombreDenunciante">
                                             
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wfirstName2"> Nombre : <span class="danger"></span> </label>
                                            <input type="text" class="form-control" id="wfirstName2" name="NombreDenunciante">
                                        </div>
                                    </div>
                                </div>
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
    <!--Wave Effevistas/cts -->
    <script src="vistas/js/waves.js"></script>
    <!--Menu sidevistas/bar -->
    <script src="vistas/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="vistas/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="vistas/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="vistas/js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="vistas/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vistas/plugins/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('#config-table').DataTable({
            responsive: true
        });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="vistas/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>
</html> 
