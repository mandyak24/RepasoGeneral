<!-- LOGOUT -->
<?php
//Nos unimos a la sesion
session_start();
//Verificar si el usuario ha iniciado sesion, si la variable no está definida
//redirigimos al usuario a la pagina de login y se detiene la ejecucion del resto del codigo con exit()
if(!isset($_SESSION['ID'])){
    header("Location:login.php");
    exit();
}
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



