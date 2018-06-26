<!DOCTYPE html>

<html lang="es">
	<head>
		<title>
			PRUEBA DE crud SOLO
		</title>
		<meta charset="utf-8">
		<link type="text/css" href="res/estilos.css" rel="stylesheet">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-default">
		<h1>Formulario</h1>
	</nav>
	<section class="container">
		<article class="form">

			<form role="form" action="modelo/insert.php" method="post">
			<div class="form-group">
				<label  for="name" name="nombre" type="text">Nombre</label><br>
				<input type="text" required name="nombre" class="form-control">
			</div>
				
			<div class="form-group">	
				<label>Sexo</label>
				<input type="radio" name="sexo" value="M">
				<label>M</label>
				<input type="radio" required name="sexo" value="F">
				<label>F</label>
			</div>
				
			<div class="form-group">
				<label>Fecha</label><br>
				<input type="date" name="fecha" class="form-control">
			</div>	
				<br>
				<input type="submit" value="Enviar" class="btn btn-primary btn-lg "  role="button"><span class="glyphicon glyphicon-share-alt" aria-hidden="true">
			</form>
		</article>

		<article class="consulta">
		<table border="1" class="table table-bordered">
			<tr>
				<th>nombre</th>
				<th>Sexo</th>
				<th>Fecha</th>
				<th>Opciones</th>
			</tr>
		<?php 
		require("modelo/conexion.php");
		$conexion = Conectar();

		$consulta = "SELECT * FROM  curso";
		$resultado= mysqli_query($conexion, $consulta);
		while ($row = mysqli_fetch_assoc($resultado)) {  ?>
			
			<tr>
				<th><?php echo $row["nombre"];?></th>
				<th><?php echo $row["sexo"];?></th>
				<th><?php echo $row["fecha"];?></th>
				<th><a href="actulizar.php?id=<?php echo $row['id'];?>">Editar</a></th>
				<th><a href="modelo/delete.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
			</tr>


	<?php	}

		?>

		</table>
			
		</article>
	</section>	
	

	</body>

</html>