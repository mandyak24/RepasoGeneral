<?php
// inicia la sesión
session_start();

// obtiene el valor de la variable de sesión usuario
$usuario = $_SESSION["usuario"];
?>

<h1>Bienvenido, <?php echo $usuario; ?>!</h1>