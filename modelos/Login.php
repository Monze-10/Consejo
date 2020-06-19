<?php 

    require_once("conexion.php");

    class Login {

        public function validarDatos($usu, $pass) {

            try {
                $con = null;
                $sql = null;
                $resultado = null;
                $cantidad_resultado = null;

                // Recuperamos la conexión
                $con = Conexion::conectar();

                // Validación de error
                if ($con == "ERROR") {
                    header("location:CtrlLogOut.php");
                }

                // Consulta
                $sql = "SELECT * FROM usuarios WHERE USU_ID = :USU AND USU_PASSWORD = :PASS";

                $resultado = $con->prepare($sql);
                $resultado->execute(array(":USU"=>$usu, ":PASS"=>md5($pass)));

                $cantidad_resultado = $resultado->rowCount();

                session_start();

                if ($cantidad_resultado == 1) {
                    $_SESSION["usu"] = $usu;
                    $_SESSION["pass"] = md5($pass);  
                } else {
                    $_SESSION["error"] = "ERROR";
                }

                
            } catch (Exception $e) {


            } finally {

                $con = null;
                $sql = null;
                $resultado = null;
                $cantidad_resultado = null;

                header("location:../");

            }

        }

        public function validarLogin() {

            try {
                $con = null;
                $sql = null;
                $resultado = null;
                $cantidad_resultado = null;

                // Recuperamos la conexión
                $con = Conexion::conectar();

                // Validación de error
                if ($con == "ERROR") {
                    header("location:CtrlLogOut.php");
                }

                // Consulta
                $sql = "SELECT * FROM usuarios WHERE USU_ID = :USU AND USU_PASSWORD = :PASS";

                $resultado = $con->prepare($sql);
                $resultado->execute(array(":USU"=>$_SESSION["usu"], ":PASS"=>$_SESSION["pass"]));

                $cantidad_resultado = $resultado->rowCount();

                if ($cantidad_resultado == 0) {
                   header("location:controlador/CtrlLogOut.php");
                } 

                
            } catch (Exception $e) {


            } finally {
                $con = null;
                $sql = null;
                $resultado = null;
                $cantidad_resultado = null;
            }
        }

    }
?>