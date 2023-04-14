<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Agregado de atributo "aria-controls" en el botón de hamburguesa -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".navbar-toggler").setAttribute("aria-controls", "my-nav");
      });
    </script>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mx-4 my-0">
        <a class="navbar-brand" href="index.php">ServiTech</a>
        
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div id="my-nav" class="collapse navbar-collapse">
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrarCarrito.php">Carrito(<?php echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']) ?>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfilUsuario.php">Mi perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
        
        <div class="mr-auto">
        <form class="form-inline" method="POST" action="busqueda.php">
            <div class="input-group">
              <input type="text" class="form-control" name="buscar" placeholder="Buscar...">
              <div class="input-group-append">
                <button style="margin-left:7px;" class="btn btn-outline-secondary" type="submit">
                    <span class="material-symbols-outlined" >search</span>
                </button>
              </div>
            </div>
          </form>
        </div>
    </nav>


        
        
  
    <br />
    <br />
    <div class="container my-4">