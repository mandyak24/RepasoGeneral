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
    <ul class="menu">
      <li class="left"><?php echo "Bienvenid@ <strong>".$_SESSION["usuario"] ."</strong>";?> </li>
      <li><a href="carrito.php"><span class="material-symbols-outlined">shopping_bag</span></a></li>
      <li><a href="menuPrincipal.php">Menu Productos</a></li>
      <li class="right"><a href="logout.php">Cerrar sesion</a></li>
    </ul>
  </nav>
</header>

<!-- MENU PRODUCTOS -->
<!-- PLACAS BASE -->
<div class="grid-container">
  <div class="grid-item">
    <img src="img/placa1.jpg" alt="Placa base">
    <p>MSI MPG B550 GAMING PLUS </p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="1">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/placa2.jpg" alt="Placa base">
    <p>Placa Base AMD Ryzen AM5 ATX</p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="2">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/placa3.jpg" alt="Placa Base">
    <p>ASUS TUF Gaming B550M-PLUS WiFi II</p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="3">Añadir al carrito</button>
    </form>
  </div>
  <!-- PROCESADORES -->
  <div class="grid-item">
    <img src="img/cpu1.jpg" alt="Procesador">
    <p>AMD Ryzen 7 5800X Procesador</p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="4" id="4">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/cpu2.jpg" alt="Procesador">
    <p>Intel CPU I9 12900F Box LGA 1700 </p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="5" id="5">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/cpu3.jpg" alt="Procesador">
    <p>AMD Procesador Ryzen 7 5700X</p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="6" id="6">Añadir al carrito</button>
    </form>
  </div>
  <!-- RAM -->
  <div class="grid-item">
    <img src="img/ram1.jpg" alt="RAM">
    <p>Corsair Vengeance RGB PRO 16 GB </p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="7" id="7">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/ram2.jpg" alt="RAM">
    <p>Corsair Vengeance SODIMM 32GB </p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="8" id="8">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/ram3.jpg" alt="RAM">
    <p>Kingston FURY Beast RGB 32GB</p>
    <p><mark>Precio: $99.99</mark></p>
    <form method="POST" action="agregar_carrito.php">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad"><br>
    <button type="submit" name="9" id="9">Añadir al carrito</button>
    </form>
  </div>
</div>





</body>
</html>

