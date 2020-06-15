<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ini_set("memory_limit", "-1");

    if (isset($_GET["codigo_postal"])){

        include "../modelos/conexion.php";
        include "../modelos/Ubicacion.php";
        include "../controladores/CtrlUbicacion.php";

        $ubicacion = new CtrlUbicacion();
        $estado = $ubicacion -> ctrlMostrarEstado($_GET["codigo_postal"]);

        echo json_encode($estado);
         
    }else if (isset($_GET["codigo_cp"])){

        include "../modelos/conexion.php";
        include "../modelos/Ubicacion.php";
        include "../controladores/CtrlUbicacion.php";

        $ubicacion = new CtrlUbicacion();
        $colonia = $ubicacion -> ctrlMostrarColonia($_GET["codigo_cp"]);

        echo json_encode($colonia);

    }else if (isset($_GET["codigo_municipio"])){

        include "../modelos/conexion.php";
        include "../modelos/Ubicacion.php";
        include "../controladores/CtrlUbicacion.php";

        $ubicacion = new CtrlUbicacion();
        $municipio = $ubicacion -> ctrlMostrarMunicipio($_GET["codigo_municipio"]);

        echo json_encode($municipio);

    }else if(isset($_GET["origen"])){

        if($_GET["origen"] == "local"){

            include "../modelos/conexion.php";
            include "../modelos/captura.modelo.php";
            include "../controladores/captura.controlador.php";

            $captura = new ControladorCaptura();
            $alcaldia = $captura -> crtMostrarAlcaldia();

            echo json_encode($alcaldia);

        }else if($_GET["origen"] == "foraneo"){

            include "../modelos/conexion.php";
            include "../modelos/captura.modelo.php";
            include "../controladores/captura.controlador.php";

            $captura = new ControladorCaptura();
            $ciudad =  $captura -> crtMostrarCiudad();

            echo json_encode($ciudad);

        }else if($_GET["origen"] == "extranjero"){

            include "../modelos/conexion.php";
            include "../modelos/captura.modelo.php";
            include "../controladores/captura.controlador.php";

            $captura = new ControladorCaptura();
            $pais = $captura -> crtMostrarPais();

            echo json_encode($pais);

        }

    }

?>