<?php

    class CtrlUbicacion{

        public static function ctrlMostrarEstado($codigo_postal){
            $respuesta = Ubicacion::getEstado($codigo_postal);
			return $respuesta;
        }

        public static function ctrlMostrarColonia($codigo_cp){
            $respuesta = Ubicacion::getColonia($codigo_cp);
			return $respuesta;
        }

        public static function ctrlMostrarMunicipio($codigo_municipio){
            $respuesta = Ubicacion::getMunicipio($codigo_municipio);
			return $respuesta;
        }

    }

?>