<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>


</head>
<body>


<?php 
$a1='<td style="background-color:blue"> Servidor </td>';
$a2='<td style="background-color:pink"> Cliente </td>';
$a3='<td style="background-color:red">Despliegue</td>';
$a4='<td style="background-color:orange">Interfaces</td>';
$a5='<td style="background-color:green">Ingles</td>';
$a6='<td style="background-color:purple">Empresa</td>';
$a7='<td style="background-color:lightblue">Descanso</td>';
?>

    <h1 style="text-align:center">HORARIO</h1>
        <table border='2'>
            <tr style="background-color:aquamarine">
                <th>LUNES</th>
                <th>MARTES</th>
                <th>MIERCOLES</th>
                <th>JUEVES</th>
                <th>VIERNES</th>
            </tr>
            <tr>
                <?php echo $a4 ?>
                <?php echo $a4 ?>
                <?php echo $a3?>
                <?php echo $a1 ?>
                <?php echo $a1?>
                

            </tr>
            <tr>
                <?php echo $a4 ?>
                <?php echo $a4 ?>
                <?php echo $a3?>
                <?php echo $a1 ?>
                <?php echo $a1?>
                
            </tr>
            <tr>
                <?php echo $a7 ?>
                <?php echo $a7 ?>
                <?php echo $a7?>
                <?php echo $a7 ?>
                <?php echo $a7?>
                
            </tr>
            <tr>
                <?php echo $a1 ?>
                <?php echo $a5 ?>
                <?php echo $a6 ?>
                <?php echo $a4 ?>
                <?php echo $a6?>
                
            </tr>
            <tr>
                <?php echo $a1 ?>
                <?php echo $a5 ?>
                <?php echo $a1 ?>
                <?php echo $a4 ?>
                <?php echo $a6 ?>
            
            </tr>
            <tr>
                <?php echo $a7 ?>
                <?php echo $a7 ?>
                <?php echo $a7?>
                <?php echo $a7 ?>
                <?php echo $a7?>
                
            </tr>
            <tr>
                <?php echo $a2 ?>
                <?php echo $a2 ?>
                <?php echo $a1 ?>
                <?php echo $a2 ?>
                <?php echo $a3?>
            
            </tr>
            <tr>
                <?php echo $a2?>
                <?php echo $a2 ?>
                <?php echo $a1 ?>
                <?php echo $a2 ?>
                <?php echo $a3 ?>
            
            </tr>
       

        </table>








</body>
</html>