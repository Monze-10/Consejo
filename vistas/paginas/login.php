<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="vistas/images/favicon.png">
    <title>Iniciar sesión</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/adminpro/" />
    <link href="vistas/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vistas/css/pages/login-register-lock.css" rel="stylesheet">
    <link href="vistas/css/style.css" rel="stylesheet">
    <link href="vistas/css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<body class="card-no-border">

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Consejo ciudadano</p>
        </div>
    </div>
    <section id="wrapper">
        <div class="login-register" style="background-image:url(vistas/images/background/1.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="controladores/CtrlLogin.php" method="POST">
                        <h2 class="box-title m-b-20">CONSEJO CIUDADANO</h2>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Usuario" name="usu" id="usu"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Contraseña" name="pass" id="pass"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <center><p id="error" style="color:red; font-weight:bold;"></p></center>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Iniciar sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <script src="vistas/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
    </script>

</body>

</html>