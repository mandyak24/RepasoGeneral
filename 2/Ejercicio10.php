<!-- Modificar el ejercicio 1 para que acepte la entrada de la fecha actual por parte de un
usuario. Antes de mostrar la fecha, se debe comprobar que es correcta. Utilizar la misma
página PHP para el formulario de introducción de datos y para mostrar la fecha obtenida
en castellano. -->



<?php
    $error="";
    $fecha="";
    if (isset($_POST["submit"])) {//Si se envia el formulario
        
        $fecha = $_POST['fecha'];
        
        if (!empty($fecha)) {
                // Obtener la fecha actual
                $hoy = date("Y-m-d");
                if($fecha == $hoy) {
                    echo "La fecha ingresada es la fecha actual: " . date('d/m/Y');
                } else {
                    echo 'La fecha ingresada no es la fecha actual.';
                }
        
        }else {
                $error = 'Ingrese una fecha.';
        }
    }
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="fecha">Fecha (AAAA-MM-DD):</label>
    <input type="text" id="fecha" name="fecha" value="<?php echo $fecha;?>">
    <span style="color:red;"><?php echo $error;?></span>
    <br><br>
    <input type="submit" value="Mostrar fecha">
</form>