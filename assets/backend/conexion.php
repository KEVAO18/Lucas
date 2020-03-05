<?php

	function conexion(){
		$host="localhost";
		$user="root";
		$pass="";
		$db="lucasinem";
		$conexion = new mysqli($host, $user, $pass, $db) or die('muerto');
	}

	function subir()
	{
		conexion();
	}
?>