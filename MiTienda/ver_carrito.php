<?php
// inicia la sesión
session_start();
// comprueba si el usuario está logueado
if(!isset($_SESSION["usuario"])){
    header("Location:login.php?redirigido=true");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi carrito</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
<!-- Cabecera -->
<header>
  <nav>
    <ul class="menu">
      <li class="left"><?php echo "Bienvenid@ <strong>".$_SESSION["usuario"] ."</strong>";?> </li>
      <li><a href="carrito.php"><span class="material-symbols-outlined">shopping_bag</span></a></li>
      <li><a href="menuPrincipal.php">Menu Productos</a></li>
      <li><a href="perfil.php">Perfil</a></li>
      <li class="right"><a href="logout.php">Cerrar sesion</a></li>
    </ul>
  </nav>
</header>
    
    
    
    
    
    
    
    



    
</body>
</html>
