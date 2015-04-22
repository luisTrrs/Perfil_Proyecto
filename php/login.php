<?php 	

	require_once('conexiones.php');

	if(isset($_SESSION)){
		//si no existe la creamos
		session_start();
	}

	if(isset($_POST['user']) && isset($_POST['pass'])){
		$user =$_POST['user'];
		$password=$_POST['pass'];
		$query="SELECT * FROM usuario WHERE nombre='".$user."' AND pass='".$password."'";
		$conexionBase= mysqli_connect($host,$usuario,$pass,$database);

		$consulta=mysqli_query($query,$conexionbase) or die(mysqli_error());
		$num_rows=mysqli_num_rows($consulta);

		if($num_rows==1){
			$datoUuario=mysqli_fetch_array($consulta);


//			//creemos las variables de sesion del usuario
			$_SESSION['autentificado']=true;//variable para validar la autenticacion de usuario
			$_SESSION['nombre']=$datoUsuario['nombre'];


			echo $_SESSION['nombre'];
			echo $_SESSION['autentificado'];
			header('Location.inicioUser.php');

		}else{
			echo 'tu contraseña es incorrecta, no se quera pasar de "·$"$%"$·"$·%,pinshe mentiroso !!! ¬¬';
		}
	}
?>