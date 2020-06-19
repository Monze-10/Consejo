<?php

    class Ubicacion{

        public static function getEstado($codigo_postal){
            $stmt = Conexion::conectar() -> prepare ("SELECT 
                                                        C_CP AS codigo_cp,
                                                        tc_entidades.C_ESTADO AS codigo_estado,
                                                        D_ESTADO AS nombre_estado
                                                    FROM
                                                        tc_entidades
                                                            INNER JOIN
                                                        tc_codigos_postales ON tc_entidades.C_ESTADO = tc_codigos_postales.C_ESTADO
                                                    WHERE
                                                        D_CODIGO =  $codigo_postal;");
            $stmt -> execute();
            return $stmt -> fetchall();
            $stmt -> close();
            $stmt = null;
        }

        public static function getColonia($codigo_cp){
            $stmt = Conexion::conectar() -> prepare ("SELECT 
                                                        C_ASENTA AS codigo_colonia,
                                                        D_ASENTA AS nombre_colonia,
                                                        C_MNPIO AS codigo_municipio
                                                    FROM
                                                        tc_asentamientos
                                                    WHERE
                                                        C_CP = $codigo_cp;");
            $stmt -> execute();
            return $stmt -> fetchall();
            $stmt -> close();
            $stmt = null;
        }

        public static function getMunicipio($codigo_municipio){
            $stmt = Conexion::conectar() -> prepare ("SELECT 
                                                        C_MNPIO AS codigo_municipio, D_MNPIO AS nombre_municipio
                                                    FROM
                                                        tc_municipios
                                                    WHERE
                                                        C_MNPIO = $codigo_municipio;");
            $stmt -> execute();
            return $stmt -> fetchall();
            $stmt -> close();
            $stmt = null;
        }

    }


?>