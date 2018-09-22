<!DOCTYPE html>
<html>
<head>
	<title>tabla registro</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
		<header>
		<h1 class="titulo"><center>Complejo Deportivo</center></h1>
		<nav class="Principal">
			<ul class="Menu">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="vision.html">Vision</a></li>
				<li><a href="mision.html">Mision</a></li>
				<li><a href="">Servicios</a>
					<ul class="Submenu">
						<li><a href="futbol.html">Canchas de futbol</a></li>
						<li><a href="voley.html">Canchas de voleyball</a></li>
						<li><a href="balon.html">Canchas de baloncesto</a></li>
					</ul>
				</li>
				<li><a href="reserva.html">Reservas</a></li>
				<li><a href="contactenos.html">Contactos</a></li>
				<li><a href="registro.html">Registrarse</a></li>
			</ul>
			
		</nav>
	</header>
	<center>
	<table border="3"> 
		<thead>
			<th colspan="1"><a href="registroproducto.html">Registrar producto</a></th>
			<th colspan="1"><a href="registro.html">Registrar usuario</a></th>
			<th colspan="6">Lista de Registros</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Id</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Correo</td>
				<td>Celular</td>
				<td colspan="2">Accion</td>
			</tr>
		<?php 
			include("conexion.php");

			$query="SELECT * FROM usuarios";
			$resultado= $conexion->query($query);
			while ($row=$resultado->fetch_assoc()) {
		?>

			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['nombre'];?></td>
				<td><?php echo $row['apellido'];?></td>
				<td><?php echo $row['correo'];?></td>
				<td><?php echo $row['celular'];?></td>
				<td><a href="modificar_registro.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
				<td><a href="eliminar_registro.php?id=<?php echo $row['id']; ?>">Eliminar</td>
			</tr>

		<?php
			}
		?>		
		</tbody>
	</table>
	</center>
</body>
<br><br><br>
<footer>
	<h1 class="titulo"><center>Complejo Deportivo</center></h1>
</footer>
</html>