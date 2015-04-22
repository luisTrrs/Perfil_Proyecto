<?php 
	require_once('conexiones.php');

	if(!isset($_SESSION)){

	session_start();
	}

	if(isset()$_POST['nombre']&& isset(%_POST['pass'])){

	$user=$_POST['nombre'];

	$password=$_POST['pass'];

	$query="INSERT INTO  usuario(nombre,pass) VALUES ('".$user."','".$password."')";

	mysqli_select_db($database,$conexionbase);

	$consulta =mysqli_query($query,$conexionbase) or die (mysqli_error());

	echo 'Registrado correctamente hermano ;) ';

	}

?>