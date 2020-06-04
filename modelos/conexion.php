<?php

class conexion{
		
	static public function conectar(){

		$link = new PDO("mysql:host=monsmario.com;dbname=ConsejoCiudadano",
						"Mario",
						"RIAM970509");

		$link ->exec("set names utf8");


		return $link;


	}


}
