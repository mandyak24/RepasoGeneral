<!DOCTYPE html>
<html>
<head>
	<title>Array de números aleatorios</title>
	<style type="text/css">
	
		.rojo {
			color: red;
		}

		.verde {
			color: green;
		}
	</style>
</head>
<body>
	<?php
	$numeros = array();
	while (count($numeros) < 20) {
		$numero_aleatorio = rand(1, 30);
		if (!in_array($numero_aleatorio, $numeros)) {
			array_push($numeros, $numero_aleatorio);
		}
	}

	arsort($numeros);
    //Lista de numeros obtenidos en orden descendente: 
	echo "<h1>Números aleatorios sin repetir:</h1>";
	echo "<pre>";
	print_r($numeros);
	echo "</pre>";


	//CODIGO PARA COMPROBAR SI SE REPITEN 
	// $numeros_repetidos = array();
	// foreach (array_count_values($numeros) as $numero => $cantidad) {
	// 	if ($cantidad > 1) {
	// 		array_push($numeros_repetidos, $numero);
	// 	}
	// }

	// if (count($numeros_repetidos) > 0) {
	// 	echo "<h1>Números repetidos:</h1>";
	// 	echo "<pre>";
	// 	print_r($numeros_repetidos);
	// 	echo "</pre>";
	// 	echo "<p>Cantidad de números repetidos: " . count($numeros_repetidos) . "</p>";
	// } else {
	// 	echo "<h1>No hay números repetidos</h1>";
	// }

	echo "<h1>Números impares en rojo y pares en verde:</h1>";
	echo "<ul>";
	foreach ($numeros as $numero) {
		if ($numero % 2 == 0) {
			echo "<li class='verde'>$numero</li>";
		} else {
			echo "<li class='rojo'>$numero</li>";
		}
	}
	echo "</ul>";
	?>
</body>
</html>