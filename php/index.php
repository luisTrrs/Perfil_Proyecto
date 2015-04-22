<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos_01.css">
	<title>Inicio de la pagina</title>
</head>
<body>

	

	<!--contenedor principal-->
	<div class="container">
		<!--header de la pagina-->
		<?php 
			//incluimos el archivo de cabecera de la pagina
			include('include/header.php');
		 ?>
		<!--fin del header de la pagina-->

		<!--barra de navegacion-->
		<?php 
			include('include/navegacion.php');
		 ?>
		<!--fin de la barra de navegacion-->

		<!--renglon del contenido principal y el formulario-->
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">
				<div class="page-header">
					<h1>La Nota Musical</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img id="queenLogo" class="img-responsive" src="img/queen.jpg" alt="LOGO">
					</div>
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea aliquam reprehenderit id adipisci enim, minima, debitis assumenda numquam facere? Veritatis voluptatibus, quibusdam. A, dolore animi obcaecati modi dolor, totam nisi.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis pariatur ratione nulla aliquid, voluptatem odit eligendi enim rerum maxime nam quia, praesentium in? Excepturi ea debitis molestiae illo, nisi tempore.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil saepe earum excepturi aliquam unde sunt, minima facere eos vel est inventore enim aut, itaque rem quaerat vero alias quam ut!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quibusdam illo, et, eos atque accusamus tempora, laudantium architecto incidunt ducimus dolorum earum provident perspiciatis magni, doloremque vero dicta dolores voluptates.</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img class="img-responsive img-rounded" src="img/quee3.jpg" alt="img">
				<br>
				<legend>Ingresa tus datos</legend>
				<form action="login.php" method="POST">
					<div class="form-group">
						<label for="Usuario">Usuario</label>
						<input class="form-control" type="text" id="Usuario" name="user" placeholder="Ingresa tu usuario" required="required">
					</div>
					<div class="form-group">
						<label for="Contraseña">Contraseña</label>
						<input class="form-control" type="password" id="Contraseña" name="pass" placeholder="Ingresa tu constraseña" required="required" >
					</div>
					<input type="submit" class="btn btn-success" value="Enviar">
				</form>
			</div>
		</div>
		<hr/>
		<!--2do row de contenido-->
		<div id="segundo_renglon" class="row">
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail">
					<h3>Columna 01</h3>
					<img class="img-col img-responsive" src="img/quee2.jpg" alt="imagen de la columna">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate odit aliquid veritatis quae nesciunt, sunt eius, officiis ullam voluptates harum perferendis velit asperiores quaerat, quidem mollitia. Ratione molestiae, expedita autem.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail">
					<h3>Columna 02</h3>
					<img class="img-col img-responsive" src="img/quee3.jpg" alt="imagen de la columna">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius omnis molestias, debitis temporibus iste sed expedita porro natus provident adipisci odit. Quisquam alias nostrum harum repudiandae ab reiciendis vel molestias.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail">
					<h3>Columna 03	</h3>
					<img class="img-col img-responsive" src="img/queen4.jpg" alt="imagen de la columna">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit laboriosam facere necessitatibus, sunt magnam incidunt, natus praesentium atque ut iusto alias dolore, temporibus ducimus deleniti non. Voluptas sint illo aliquid!</p>
				</div>
			</div>
		</div>
		
	</div>
	<!--fin del contenedor principal-->
	<?php 
		include('include/footer.php');
	 ?>

	<!--footer de la pagina-->
	
	

	<!--Archivos de java script-->

</body>
</html>