<?php

    class Conexion{
            
        public static function conectar(){

            // $link = new PDO("mysql:host=monsmario.com;dbname=ConsejoCiudadano","Mario","RIAM970509");

            // $link ->exec("set names utf8");


            // return $link;

            $con = null;

                try {

                    // Conexión
                    $con = new PDO("mysql:host=monsmario.com;dbname=ConsejoCiudadano","Mario","RIAM970509");
            
                    // Errores
                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                    // Caracteres utf8
                    $con->exec("SET CHARACTER SET utf8");
            
                } catch(Exception $e) {
            
                    $con = "ERROR";
            
                } finally {
            
                    return $con;
                    
                }


        }


    }


?>