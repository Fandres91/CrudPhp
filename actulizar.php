<!DOCTYPE html>
<html>
<head>
	<title>Actualización de los datos </title>
</head>
<body>
	<?php 
		require("modelo/conexion.php");
		$conexion = Conectar();
		$id = $_GET["id"];
		$consulta = "SELECT * FROM curso WHERE id = $id";
		$resultado = mysqli_query($conexion, $consulta);
		$registro = $resultado->fetch_assoc();

	?>
	<form action="modelo/update.php" method="post">

	<input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
	<label>nombre</label>
	<input type="text" name="nombre" value="<?php echo $registro['nombre']?>">
	<br>
	<label>Sexo</label>
	<input type="radio" name="sexo" value="M"<?php if ($registro['sexo'] =='M'){echo "checked";} ?>>

	<label>M</label>
	<input type="radio" name="sexo" value="F"<?php if ($registro['sexo'] =='F'){echo "checked";} ?>>
	<label>F</label>
	<br>
	<label>fecha</label>
	<input type="date" name="fecha" value="<?php echo $registro['fecha']?>">
	<br><br>
	<input type="submit" value="Enviar">
		

	</form>
</body>
</html>