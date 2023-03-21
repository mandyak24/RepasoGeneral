<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//Nos unimos a la sesion
session_start();
//Limpiamos los datos
$_SESSION=array();
//Eliminamos la sesion 
session_destroy();

setcookie(session_name(),0,time()-3600*24); //PHPSESSID es el nombre por defecto de session_name()
//Redirigimos a la pagina de acceso (login.php)
header("Location:login.php");

?> 
</body>
</html>
