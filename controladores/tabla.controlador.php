<?php

class ControladorTabla{

	public function ctrTabla() {

		include "vistas/tabla.php";
	}

		/*==============================
		Seleccionar Registros
		================================*/


	static public function ctrReporteCiudadano() {

		

		$respuesta = ModeloReporte::mdlReporte();

		return $respuesta;

	}
}



