<?php
include "templates/header.php";
include "include/DB.php";
include "include/Producto.php";
include "carrito.php";
?>


<!-- Mensaje de alerta -->
<br>
<?php if ($mensaje != "") { ?>
    <div class="alert alert-success">
        <?php echo $mensaje . "<br>";
        if (isset($_COOKIE['ultimaConexion'])) {
            echo "Ultima conexion: " . $_COOKIE['ultimaConexion'];
        } ?>
        <a href="mostrarCarrito.php" class="badge badge-success">Ver carrito</a>
    </div>
<?php } ?>
<!-- Menu productos -->
<div class="row">
    <?php
    $conexion=new DB();
    $listaProductos= $conexion->obtenerProductos();
    ?>
    <?php foreach ($listaProductos as $producto) { ?>
        <div class="col-4">
            <div class="card m-4">
                <img title="<?php echo $producto['Nombre'] ?>" alt="<?php echo $producto['Nombre'] ?>" class="img-fluid mx-auto" style="height:50%; width:50%; " src="img/<?php echo $producto['ID'] ?>.jpg">
                <div class="card-body">
                    <span><?php echo $producto['Nombre'] ?></span>
                    <h5 class="card title"><?php echo $producto['Precio'] . " &euro;" ?></h5>
                    <p class="card-text">Stock disponible: <?php echo $producto['Cantidad'] . " uds" ?></p>

                    <form action="" method="post">
                        <input type="hidden" name="ID" id="id" value="<?php echo $producto['ID']; ?>">
                        <input type="hidden" name="Nombre" id="nombre" value="<?php echo $producto['Nombre']; ?>">
                        <input type="hidden" name="Precio" id="precio" value="<?php echo $producto['Precio']; ?>">
                        <label for="cantidad">Selecciona cantidad:</label><br>
                        <input type="number" name="Cantidad" id="cantidad" min="1" max="<?php echo $producto['Cantidad']; ?>">

                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>

    <?php   } ?>


</div>


<?php
include "templates/footer.php";
?>