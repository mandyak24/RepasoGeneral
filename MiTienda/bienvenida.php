<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<?php
// inicia la sesión
session_start();

// obtiene el valor de la variable de sesión usuario
$usuario = $_SESSION["usuario"];
?>

<h1>Bienvenido, <?php echo $usuario; ?>!</h1>
    
</body>
</html>

