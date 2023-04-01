<?php
include("global/conexion.php");
include("carrito.php");
include('templates/header.php');
?>

        <!-- Mensaje de alerta -->
        <br>
        <?php if($mensaje!=""){ ?>
        <div class="alert alert-success">
            <?php echo $mensaje; ?>
            <a href="mostrarCarrito.php" class="badge badge-success">Ver carrito</a>
        </div>
        <?php } ?>
        <!-- Menu productos -->
        <div class="row">
            <?php
            $sentencia = $pdo->prepare("SELECT * FROM tiendaproductos");
            $sentencia->execute();
            $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php foreach ($listaProductos as $producto) { ?>
                <div class="col-4">
                    <div class="card m-3">
                        <img title="<?php echo $producto['Nombre']?>" alt="<?php echo $producto['Nombre']?>" class="img-fluid" style="height:250px;" src="img/<?php echo $producto['ID']?>.jpg">
                        <div class="card-body">
                            <span><?php echo $producto['Nombre']?></span>
                            <h5 class="card title"><?php echo $producto['Precio']. " &euro;"?></h5>
                            <p class="card-text">Stock disponible: <?php echo $producto['Cantidad']." uds"?></p>

                            <form action="" method="post">
                                <input type="hidden" name="ID" id="id" value="<?php echo $producto['ID']; ?>">
                                <input type="hidden" name="Nombre" id="nombre" value="<?php echo $producto['Nombre']; ?>">
                                <input type="hidden" name="Precio" id="precio" value="<?php echo $producto['Precio']; ?>">
                                <label for="cantidad">Selecciona cantidad:</label><br>
                                <input type="number" name="Cantidad" id="cantidad" min="1" max="<?php echo $producto['Cantidad'];?>?>">
                           
                            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                            </form>
                        </div>
                    </div>
                </div>

            <?php   } ?>


        </div>

<?php include('templates/footer.php'); ?>