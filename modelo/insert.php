<?php

	$nombre = $_POST["nombre"];
	$sexo = $_POST["sexo"];
	$fecha = $_POST["fecha"];

	require("conexion.php");
	$conexion = Conectar();

	$insertar = "INSERT INTO curso (nombre, sexo, fecha) VALUES ('$nombre', '$sexo', '$fecha')";
	$resultado= mysqli_query($conexion, $insertar);
	header("location:../index.php");

?>