<!-- LOGOUT -->
<?php
//Nos unimos a la sesion
session_start();
//Limpiamos los datos
$_SESSION=array();

//Eliminar las cookies
if(isset($_COOKIE["ultimaConexion"])) {
    setcookie("ultimaConexion", '', time() - 3600);
}
//Eliminamos la sesion 
session_destroy();

//Redirigimos al usuario a la pagina de login
header("Location:login.php");
?> 



