<?php

    // if (isset($_GET["pagina"])) {

    //     if ($_GET["pagina"] == "tablas" ||
    //         $_GET["pagina"] == "captura" ||
    //         $_GET["pagina"] == "prueba" ||
    //         $_GET["pagina"] == "totales"){
    //             include "paginas/".$_GET["pagina"].".php";
    //     }
    // }else{
    //     include "paginas/login.php";
    // }

    session_start();

    if (isset($_SESSION["usu"]) && isset($_SESSION["pass"])) {

        require_once("modelos/Login.php");
        $validar = new Login();
        $validar->validarLogin();

        include_once("paginas/captura.php");
        
    } else {

        include_once("vistas/paginas/login.php");

        if (isset($_SESSION["error"])) {
        
            echo "<script>$('#error').html('Usuario y/o contraseña incorrecto.');</script>";
            unset($_SESSION["error"]);
    
        }


    }

?>