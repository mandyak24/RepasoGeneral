<!DOCTYPE html>
<html>
<head>
	<title>Datos de alumno</title>
	<style>
		.nombre {
			font-weight: bold;
			color: blue;
		}
        .apellidos {
			font-weight: bold;
			color: coral;
		}
        .curso{
			font-weight: bold;
			color: cyan;
		}
        .tlfn{
			font-weight: bold;
			color: green;
		}
        .direccion {
			font-weight: bold;
			color:pink;
		}
	</style>
</head>
<body>
	<?php
		$nombre = "Juan";
		$apellidos = "Pérez López";
		$curso = "2º de Bachillerato";
		$telefono = "123456789";
		$direccion = "Calle Falsa 123, Springfield";
	?>

	<h1>Datos de alumno:</h1>
	<ul>
		<li><span class="nombre">Nombre:<?php echo $nombre ?></span> </li>
		<li><span class="apellidos">Apellidos: <?php echo $apellidos ?></span></li>
		<li><span class="curso">Curso:<?php echo $curso ?></span></li>
		<li><span class="tlfn">Teléfono: <?php echo $telefono ?></span></li>
		<li><span class="direccion">Dirección: <?php echo $direccion ?></span></li>
	</ul>
</body>
</html>