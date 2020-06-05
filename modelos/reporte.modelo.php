<?php

	ini_set("memory_limit", "-1");
	// require_once "conexion.php";

	/*==============================
	Seleccionar Registros
	================================*/
	class ModeloReporte{

		static public function mdlReporte(){

			$stmt = Conexion::conectar() -> prepare("SELECT R_IdReg, R_Folio , R_Fecha, R_Nombre, R_TelefonoDen, R_IdenLlamadas, R_Origen, R_FechaHechos, R_HoraHechos, R_Catalogo, R_SubCatalogo, R_SubSubCatalogo, R_Status FROM reporteciudadano WHERE R_Status = 1  ORDER BY reporteciudadano.R_Fecha DESC limit 1500");

			$stmt -> execute();

			return $stmt -> fetchAll();

			$stmt -> close();

			$stmt = null;


		}
	}


?>