<?php 
require("conexion.php");

$conexion = Conectar();
$id = $_GET["id"];
$eliminar = "DELETE FROM curso WHERE id = $id";
$resultado = mysqli_query($conexion, $eliminar);

header("location:../index.php");
?>