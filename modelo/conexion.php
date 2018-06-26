<?php
 function Conectar(){


	$servidor= "localhost";
	$user= "root";
	$pass= "";
	$bd="bd";

	$conexion = new mysqli($servidor,$user, $pass, $bd);

	return $conexion;
	}

?>