<?php
include("global/conexion.php");
include('templates/header.php');
include("carrito.php");

?>

<br>
<h3>Lista del carrito</h3><br>

<br>
<?php if (!empty($_SESSION['carrito'])) { ?>
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th width="50%" class="text-center">Nombre</th>
                <th width="15%" class="text-center">Cantidad</th>
                <th width="20%" class="text-center">Precio</th>
                <th width="10%" class="text-center">Total</th>
                <th width="5%">--</th>
            </tr>
            <?php $total=0; ?>
            <?php foreach ($_SESSION['carrito'] as $indice => $producto) { ?>
                <tr>
                    <td width="50%" class="text-center"><?php echo $producto['Nombre'];?> </td>
                    <td width="15%" class="text-center"><?php echo $producto['Cantidad']; ?></td>
                    <td width="20%" class="text-center"><?php echo $producto['Precio'];?></td>
                    <td width="10%" class="text-center"><?php echo number_format($producto['Precio']*$producto['Cantidad'],2);?></td>
                    <td width="5%">
                        <form action="" method="POST">
                        <input type="hidden" name="ID" value="<?php echo $producto['ID']; ?>" />
                        <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                        </form>
                    </td>
                 
                </tr>
            <?php $total=$total+($producto['Precio']*$producto['Cantidad']); ?>
            <?php } ?>
            <tr>
                <td colspan="3" align="right">
                    <h3>Total</h3>
                </td>
                <td align="right">
                    <h3><?php echo number_format($total, 2) . "&euro;"; ?></h3>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
<?php } else { ?>
    <div class="alert alert-success">No hay productos en el carrito</div>
<?php } ?>
<?php include("templates/footer.php"); ?>