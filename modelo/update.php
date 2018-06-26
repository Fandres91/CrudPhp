<?php
 require("conexion.php");

 $conexion = Conectar();

$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$fecha = $_POST["fecha"];
$id = $_POST["id"];

 $actulizar = "UPDATE curso SET nombre = '$nombre', sexo='$sexo', fecha = '$fecha' WHERE id = $id ";
 $resultado = mysqli_query($conexion, $actulizar);

 header("location:../index.php");

?>