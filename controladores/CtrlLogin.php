<?php 

    if (isset($_POST["usu"]) && isset($_POST["pass"])) {

        require_once("../modelos/Login.php");
        $validar = new Login();
        $validar->validarDatos($_POST["usu"], $_POST["pass"]);

    } else {

        header("location:../");

    }

?>