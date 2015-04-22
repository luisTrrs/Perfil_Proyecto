<?php
	session_start();

	if(!$_SESSION['autentificado']){
		session_unset();
		session_destroy();
		header('Location:index.php');

	}
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">

	<title>Documentos</title>
</head>
<body>
	<h1>
		bienvenido <?php echo $_SESSION['nombre']; ?>
	</h1>
	<a href="salir.php"></a>
</body>
</html>