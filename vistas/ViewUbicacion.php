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

    }

?>