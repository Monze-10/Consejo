<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ini_set("memory_limit", "-1");

    if (isset($_GET["sexo"]) && $_GET["sexo"] == "get"){

        include "../modelos/conexion.php";
        include "../controladores/captura.controlador.php";
        include "../modelos/captura.modelo.php";

        $captura = new ControladorCaptura();
        $sexo = $captura -> crtMostrarSexo();

        echo json_encode($sexo);
         
    }else if (isset($_GET["necesidad"]) && $_GET["necesidad"] == "get"){

        include "../modelos/conexion.php";
        include "../controladores/captura.controlador.php";
        include "../modelos/captura.modelo.php";

        $captura = new ControladorCaptura();
        $necesidad = $captura -> crtMostrarNecesidad();

        echo json_encode($necesidad);
         
    }else if (isset($_GET["catalogo"]) && $_GET["catalogo"] == "get"){

        include "../modelos/conexion.php";
        include "../controladores/captura.controlador.php";
        include "../modelos/captura.modelo.php";

        $captura = new ControladorCaptura();
        $catalogo = $captura -> crtMostrarCatalogo($_GET["id_catalogo"]);

        echo json_encode($catalogo);
         
    }else if (isset($_GET["terminacion_llamada"]) && $_GET["terminacion_llamada"] == "get"){

        include "../modelos/conexion.php";
        include "../controladores/captura.controlador.php";
        include "../modelos/captura.modelo.php";

        $captura = new ControladorCaptura();
        $terminacion_llamada = $captura -> crtMostrarTerminacionLLamada();

        echo json_encode($terminacion_llamada);
         
    }else if (isset($_GET["programa_especial"]) && $_GET["programa_especial"] == "get"){

        include "../modelos/conexion.php";
        include "../controladores/captura.controlador.php";
        include "../modelos/captura.modelo.php";

        $captura = new ControladorCaptura();
        $programa_especial = $captura -> crtMostrarProgramaEspecial();

        echo json_encode($programa_especial);
         
    }else if (isset($_GET["marca_vehiculo"]) && $_GET["marca_vehiculo"] == "get"){

        include "../modelos/conexion.php";
        include "../controladores/captura.controlador.php";
        include "../modelos/captura.modelo.php";

        $captura = new ControladorCaptura();
        $marca_vehiculo = $captura -> ctrMostrarMarcaVehiculo();

        echo json_encode($marca_vehiculo);
         
    }else if (isset($_GET["id_marca"])){

        include "../modelos/conexion.php";
        include "../controladores/captura.controlador.php";
        include "../modelos/captura.modelo.php";

        $captura = new ControladorCaptura();
        $modelo_vehiculo = $captura -> ctrMostrarModeloVehiculo($_GET["id_marca"]);

        echo json_encode($modelo_vehiculo);
         
    }else if (isset($_GET["colores"]) && $_GET["colores"] == "get"){

        include "../modelos/conexion.php";
        include "../controladores/captura.controlador.php";
        include "../modelos/captura.modelo.php";

        $captura = new ControladorCaptura();
        $colores = $captura -> ctrMostrarColores();

        echo json_encode($colores);
         
    }

?>