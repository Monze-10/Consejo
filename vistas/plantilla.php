<?php

    session_start();

    if (isset($_SESSION["usu"]) && isset($_SESSION["pass"])) {

        require_once("modelos/Login.php");
        $validar = new Login();
        $validar->validarLogin();

        if(isset($_GET["page"])){
            include_once("paginas/".$_GET["page"].".php");
        }else{
            include_once("paginas/main.php");

        }

        
    } else {

        include_once("vistas/paginas/login.php");

        if (isset($_SESSION["error"])) {
        
            echo "<script>$('#error').html('Usuario y/o contraseña incorrecto.');</script>";
            unset($_SESSION["error"]);
    
        }


    }

?>