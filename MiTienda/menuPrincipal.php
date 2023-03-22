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
            <li><?php echo "Bienvenid@ <strong>".$_SESSION["usuario"] ."</strong>";?> </li>
            <li><a href="login.php">Mi carrito<span class="material-symbols-outlined">shopping_bag</span></a></li>
            <li><a href="menuPrincipal.php">Menu Productos</a></li>
            <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>
    
    </div>
  </nav>
</header>

<!-- MENU PRODUCTOS -->
<div class="grid-container">
  <div class="grid-item">
    <img src="img/placa1.jpg" alt="Placa base">
    <p>MSI MPG B550 GAMING PLUS </p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/placa2.jpg" alt="Placa base">
    <p>Placa Base AMD Ryzen AM5 ATX</p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/placa3.jpg" alt="Placa Base">
    <p>ASUS TUF Gaming B550M-PLUS WiFi II</p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/cpu1.jpg" alt="Procesador">
    <p>AMD Ryzen 7 5800X Procesador</p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/cpu2.jpg" alt="Procesador">
    <p>Intel CPU I9 12900F Box LGA 1700 </p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/cpu3.jpg" alt="Procesador">
    <p>AMD Procesador Ryzen 7 5700X</p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/ram1.jpg" alt="RAM">
    <p>Corsair Vengeance RGB PRO 16 GB </p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/ram2.jpg" alt="RAM">
    <p>Corsair Vengeance SODIMM 32GB </p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
  <div class="grid-item">
    <img src="img/ram3.jpg" alt="RAM">
    <p>Kingston FURY Beast RGB 32GB</p>
    <p>Precio: $99.99</p>
    <button type="submit" name="carrito">Añadir al carrito</button>
  </div>
</div>





</body>
</html>

