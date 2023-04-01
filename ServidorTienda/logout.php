<!-- LOGOUT -->
<?php
//Nos unimos a la sesion
session_start();
//Limpiamos los datos
$_SESSION=array();
//Eliminamos la sesion 
session_destroy();

// if(isset($_COOKIE["usuario"]) AND isset($_COOKIE["contrasena"])){
//     setcookie("usuario", '', time() - (3600));
//     setcookie("contrasena", '', time() - (3600));
// }

header("Location:login.php");
?> 



