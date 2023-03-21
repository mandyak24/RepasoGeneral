<?php
// inicia la sesión
session_start();
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
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
<header>
<!-- MENU DE NAVEGACION -->
  <nav>
    <div class="container">
    
        <ul class="menu">
            <li><a href="login.php"><span class="material-symbols-outlined">shopping_bag</span></a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>
    
    </div>
  </nav>
</header>

<!-- MENU PRODUCTOS -->
<div class="grid-container">
  <div class="grid-item">
    <img src="img/pc1.jpg" alt="Imagen 1">
    <p>HP 15s-eq1040ns</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/pc2.jpg" alt="Imagen 2">
    <p>Apple 2023 MacBook Pro</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/pc3.jpg" alt="Imagen 3">
    <p>Descripción de la imagen 3</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="" alt="Imagen 4">
    <p>Descripción de la imagen 4</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="" alt="Imagen 5">
    <p>Descripción de la imagen 5</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="" alt="Imagen 6">
    <p>Descripción de la imagen 6</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
</div>



<!-- <?php
    echo "Bienvenido " .$_SESSION["usuario"];
    echo "<br/>";

?> -->
</br>

</body>
</html>

