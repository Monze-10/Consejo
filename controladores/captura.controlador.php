<?php


class ControladorCaptura{

 /* --------------------------
 Mostrar contenido de la tabla ciudad
 -------------------------*/
	static public function crtMostrarCiudad(){

		$tabla = "tc_entidades";

		$respuesta = ModeloCaptura::mdlMostrarCiudad($tabla);

		return $respuesta;


	}

	static public function crtMostrarPais(){

		$tabla = "paises";

		$respuesta = ModeloCaptura::mdlMostrarPais($tabla);

		return $respuesta;


	}

	static public function crtMostrarNecesidad(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarNecesidad($tabla);

		return $respuesta;


	}

	static public function crtMostrarDetalle(){

		$tabla = "detalle_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarDetalle($tabla);

		return $respuesta;


	}

	static public function crtMostrarDelito(){

		$tabla = "detalle_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarDetalle($tabla);

		return $respuesta;


	}

	static public function crtMostrarEdad(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarEdad($tabla);

		return $respuesta;


	}

	static public function crtMostrarSexo(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarSexo($tabla);

		return $respuesta;


	}

	static public function crtMostrarAlcaldia(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarAlcaldia($tabla);

		return $respuesta;


	}

	static public function crtMostrarCanaliza(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarCanalizado($tabla);

		return $respuesta;


	}

	static public function crtMostrarConducta(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarConducta($tabla);

		return $respuesta;


	}

	static public function crtMostrarContacto(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarContacto($tabla);

		return $respuesta;


	}

	static public function crtMostrarForma(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarForma($tabla);

		return $respuesta;


	}

	static public function ctrMostrarHecho(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarHecho($tabla);

		return $respuesta;


	}

	static public function ctrMostrarLlamada(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarLlamada($tabla);

		return $respuesta;


	}

	static public function ctrMostrarEscolar(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarEscolar($tabla);

		return $respuesta;


	}

	static public function ctrMostrarOcupacion(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarOcupacion($tabla);

		return $respuesta;


	}

	static public function ctrMostrarEdoCivil(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarEdoCivil($tabla);

		return $respuesta;


	}

	static public function ctrMostrarSsocial(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarSsocial($tabla);

		return $respuesta;


	}

	static public function ctrMostrarEtapa(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarEtapa($tabla);

		return $respuesta;


	}

	static public function ctrMostrarEnfermedad(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarEnfermedad($tabla);

		return $respuesta;


	}

	static public function ctrMostrarVive(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarVive($tabla);

		return $respuesta;


	}

	static public function ctrMostrarObserva(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarVive($tabla);

		return $respuesta;


	}

	static public function ctrMostrarParentesco(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarParentesco($tabla);

		return $respuesta;


	}

	static public function ctrMostrarAge(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarAge($tabla);

		return $respuesta;


	}

	static public function ctrMostrarOcupa(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarOcupa($tabla);

		return $respuesta;


	}

	static public function ctrMostrarGrado(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarGrado($tabla);

		return $respuesta;


	}

	static public function ctrMostrarMaltrato(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarMaltrato($tabla);

		return $respuesta;


	}

	static public function ctrMostrarDesdeC(){

		$tabla = "contenido_catalogos";

		$respuesta = ModeloCaptura::mdlMostrarDesdeC($tabla);

		return $respuesta;


	}


	
	
	

}


