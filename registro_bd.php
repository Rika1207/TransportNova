<?php 

include("conexion.php");

	$NombreUsuarios = $_POST['NombreUsuarios'];
	$CedulaUsuario = $_POST['CedulaUsuario'];
	$NumeroCelularUsuario = $_POST['NumeroCelularUsuario'];
	$RutaPreferidaUsuario = $_POST['RutaPreferidaUsuario'];
	$BarrioUsuario = $_POST['BarrioUsuario'];
	$contrasena = $_POST['contrasena'];

	$query="INSERT INTO cliente (NombreUsuarios,CedulaUsuario, NumeroCelularUsuario, RutaPreferidaUsuario, BarrioUsuario, contrasena) VALUES('$NombreUsuarios','$CedulaUsuario','$NumeroCelularUsuario','$RutaPreferidaUsuario','$BarrioUsuario','$contrasena')"; 

	$resultado= $conexion->query($query);

	if ($resultado) {
		header("Location: index.php");
	}
	else{
		echo "insersion no exitosa";
	}




?>