<?php 
//Se muestran los resultados de la busqueda en el navbar por nombre de producto
include('templates/header.php');
?>


<?php
    $busqueda=$_POST['buscar'];
    require('include/DB.php');
    $conexion=new DB();
  
    $consulta="SELECT * FROM tiendaproductos WHERE Nombre LIKE '$busqueda%'";	
    $resultado=$conexion->ejecutarConsulta($consulta);

    echo "<b>PRODUCTOS ENCONTRADOS: </b><br>";
    
    echo "<table style='border:1px solid black;'>";
    echo "<tr>";
    echo "<th style='border:1px solid black; padding: 5px; font-weight: bold;width:600px;'>Nombre</th>";
    echo "<th style='border:1px solid black; padding: 5px; font-weight: bold;width:200px;'>Precio</th>";
    echo "<th style='border:1px solid black; padding: 5px; font-weight: bold;width:200px;'>En stock</th>";
    echo "</tr>";
    while($fila=mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>". $fila['Nombre'] . "</td>";
        echo "<td>". $fila['Precio'] . "</td>";
        echo "<td>". $fila['Cantidad'] . "</td>";
        echo "</tr>";
    }
    echo "</tr></table>";


    ?>

<?php include('templates/footer.php'); ?>