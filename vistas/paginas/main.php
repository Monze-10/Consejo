<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="vistas/images/favicon.png">
    <title>Consejo ciudadano</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/adminpro/" />
    <link href="vistas/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vistas/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <link href="vistas/css/style.css" rel="stylesheet">
    <link href="vistas/css/pages/user-card.css" rel="stylesheet">
    <link href="vistas/css/colors/default.css" id="theme" rel="stylesheet">

    <style>
        .card:hover{
        cursor:pointer!important;
        }

        .el-card-avatar:hover{
        cursor:pointer!important;
        }

        .card{
            width:35%;
            display:inline-block; 
            margin:20px;
        }

        @media screen and (max-width: 867px){
            .card{
                width:90%;
            }
        }

        .box-title{
            font-weight:bold; 
            text-transform:uppercase; 
            font-size:24px;
        }
    </style>
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
                    <li class="active"> <a class="has-arrow waves-effect" href="./#" aria-expanded="false"><i class="mdi mdi-home-outline"></i><span class="hide-menu">Inicio</span></a>
                    </li>
                    <li> <a href="./?page=captura_reporte" class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-format-list-bulleted-type"></i><span class="hide-menu">Captura de reporte</span></a>
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

                <center>

                    <div class="card custom" onclick="window.location.href='./?page=captura_reporte';">
                        <div class="el-card-item">
                            <div class="el-card-avatar">
                                 <img src="vistas/images/options/report2.jpg" class="img-fluid"/>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">Captura de reporte</h3><br>
                                <!-- <small>subtitle of project</small><br/>  -->
                            </div>
                        </div>
                    </div>

                    <div class="card custom" onclick="window.location.href='./?page=captura_reporte';">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                 <img src="vistas/images/options/report2.jpg" class="img-fluid"/>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">Validar reporte</h3><br>
                                <!-- <small>subtitle of project</small><br/>  -->
                            </div>
                        </div>
                    </div>

                    <div class="card custom" onclick="window.location.href='./?page=captura_reporte';">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                 <img src="vistas/images/options/report2.jpg" class="img-fluid"/>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">Consulta</h3><br>
                                <!-- <small>subtitle of project</small><br/>  -->
                            </div>
                        </div>
                    </div>

                    <div class="card custom" onclick="window.location.href='./?page=captura_reporte';">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                 <img src="vistas/images/options/report2.jpg" class="img-fluid"/>
                            </div>
                            <div class="el-card-content">
                                <h3 class="box-title">Exportación</h3><br>
                                <!-- <small>subtitle of project</small><br/>  -->
                            </div>
                        </div>
                    </div>
                    
                </center>

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
    <script src="vistas/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="vistas/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
</body>

</html>