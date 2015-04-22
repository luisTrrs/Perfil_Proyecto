<?php

	requiere_once('conexiones.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="css/estilos_01.css">
</head>
<body>
	<div class="container">
		<?php 
		include('include/header.php');

		include('include/navegacion.php');

		?>
		<div class="row">
			<div class="col-md-3">
				<h2>Algo de la pagian de login </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
			</div>

			<div class="col-md-6">
				<form action="registrar.php" method="POST">
					<div class="from-group">
						<label for=""> nombre</label>
						<input class="form-control" type="text" name="nombre" placeholder="ingresa tu susuario">
					</div>

					<div class="from-group">
						<label for=""> contraseña</label>
						<input class="form-control" type="password" name="pass" placeholder="ingresa tu contraseña">
					</div>
					<input type="submit" class="btn btn-primary">

				</form>
			</div>
			<div class="col-md-3">
				<h2>Algo mas de la pagina</h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dt non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 	</p>
			</div>
		</div>
	</div>


		<?php
		include('include/footer.php');
		?>


</body>
</html>