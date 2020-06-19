<?php

// require "conexion.php";

class ModeloCaptura{

	/*======================================
	Mostrar lo que tiene la tabla entidades
	========================================*/

	static public function mdlMostrarCiudad($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT C_ESTADO, D_ESTADO FROM $tabla ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarPais($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT PA_ID, PA_NOMBRE FROM $tabla ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarNecesidad($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID = 85 ORDER BY CON_ID ASC;");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarCatalogo($tabla, $id_necesidad){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION, CON_VALOR FROM $tabla WHERE CAT_ID = $id_necesidad ORDER BY CON_ID ASC;");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarTerminacionLlamada($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE CAT_ID = 88 ORDER BY CON_ID ASC;");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarProgramaEspecial($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE CAT_ID = 89 ORDER BY CON_ID ASC;");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

		static public function mdlMostrarDetalle($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 3 OR CAT_ID=2 OR CAT_ID=6 OR CAT_ID=7 OR CAT_ID=12 ORDER BY CAT_ID ASC ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarDelito($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID, CON_DESCRIPCION FROM detalle_catalogos WHERE CAT_ID=96 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarEdad($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID =40 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarSexo($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 63  ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarAlcaldia($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 12  ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarCanalizado($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 25");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarConducta($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 102");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarContacto($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 103");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarForma($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 104");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarHecho($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 10");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarLlamada($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 98");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarEscolar($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CAT_ID, CON_ID,CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 90");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarOcupacion($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 91  ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarEdoCivil($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 92 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}
	static public function mdlMostrarSsocial($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 93 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}
	static public function mdlMostrarEtapa($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 97 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarEnfermedad($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 94 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarVive($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 95 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}
	
	static public function mdlMostrarObserva($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 96 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}


	static public function mdlMostrarParentesco($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 108 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarAge($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 40 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarOcupa($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 109 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarGrado($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 110 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarMaltrato($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 112 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarDesdeC($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT CON_ID, CON_DESCRIPCION FROM $tabla WHERE CAT_ID= 112 ");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	static public function mdlMostrarCodigoP($tabla){

		$stmt = Conexion::conectar() -> prepare("SELECT C_CP, D_CODIGO, C_ESTADO FROM tc_codigos_postales");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;
	}

	public static function mdlMostrarMarcaVehiculo(){

		$stmt = Conexion::conectar() -> prepare("SELECT M_CVEMARCA, M_DESCMARCA FROM marca_vehiculo ORDER BY M_DESCMARCA ASC;");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;

	}

	public static function mdlMostrarModeloVehiculo($id_marca){

		$stmt = Conexion::conectar() -> prepare("SELECT M_CVESUBMARCA, M_DESCSUBMARCA FROM sub_marca_vehiculo WHERE M_CVEMARCA = $id_marca ORDER BY M_DESCSUBMARCA ASC;");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;

	}

	public static function mdlMostrarColores(){

		$stmt = Conexion::conectar() -> prepare("SELECT C_CVECOLOR, C_DESCCOLOR FROM colores ORDER BY C_DESCCOLOR ASC;");

		$stmt -> execute();

		return $stmt -> fetchall();

		$stmt -> close();

		$stmt = null;

	}
	

}


?>