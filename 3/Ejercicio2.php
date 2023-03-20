<?php
// Vamos a mejorar el ejercicio de conversión de divisas creando un php que muestre 4
// divisas diferentes en dos desplegables, y un campo numérico. Será obligatorio para enviar
// el formulario que el campo numérico tenga algún valor numérico. La página del resultado
// muestra la conversión del campo numérico de la primera divisa a la segunda. Ha de usar
// un archivo externo de javascript.

if (isset($_POST['enviar'])) {
    $divisa_origen = $_POST['divisa_origen'];
    $divisa_destino = $_POST['divisa_destino'];
    $cantidad = $_POST['cantidad'];
   
    if(!is_numeric($cantidad)){
        echo "El campo debe ser númerico";
    }else{
        switch ($divisa_origen) {
            case 'USD':
    
                if ($divisa_destino == 'JPY') {
    
                    $resultado = $cantidad * 133.20;
                    echo "Son " .$resultado . " yenes";
                } elseif ($divisa_destino == 'EUR') {
    
                    $resultado = $cantidad * 0.94;
                    echo "Son " .$resultado . "  euros";
                } elseif ($divisa_destino == 'GBP') {
    
                    $resultado = $cantidad * 0.82;
                    echo "Son " .$resultado . "  libras";
                } else {
                    echo "Son " .$cantidad . " dolares";
                }
    
                break;
    
            case 'EUR':
    
                if ($divisa_destino == 'USD') {
                    
                    $resultado = $cantidad * 1.07;
                    echo "Son " .$cantidad . " dolares";
                } elseif ($divisa_destino == 'GBP') {
    
                    $resultado = $cantidad * 0.88;
                    echo "Son " .$resultado . "  libras";
                } elseif ($divisa_destino == 'JPY') {
    
                    $resultado = $cantidad *141.88;
                    echo "Son " .$resultado . " yenes";
                } else {
                    echo "Son ". $cantidad . " euros";
                }
    
                break;
    
            case 'GBP':
    
                if ($divisa_destino == 'USD') {
                    $resultado = $cantidad * 1.21;
                    echo "Son " .$cantidad . " dolares";
    
                } elseif ($divisa_destino == 'EUR') {
                    $resultado = $cantidad * 1.14;
                    echo "Son " .$cantidad . " euros";
    
                } elseif ($divisa_destino == 'JPY') {
                    $resultado = $cantidad * 161.73;
                    echo "Son " .$cantidad . " yenes";
    
                } else {
                    echo "Son " .$cantidad . " libras";
                }
    
                break;
    
            case 'JPY':
    
                if ($divisa_destino == 'USD') {
                    $resultado = $cantidad * 0.0075;
                    echo "Son " .$cantidad . " dolares";
    
                } elseif ($divisa_destino == 'EUR') {
                    $resultado = $cantidad * 0.0070;
                    echo "Son " .$cantidad . " euros";
    
                } elseif ($divisa_destino == 'GBP') {
                    $resultado = $cantidad * 0.0062;
                    echo "Son " .$cantidad . " libras";
                } else {
                    echo "Son " .$cantidad . " yenes";
                }
    
                break;
        }

    }
   
} else {
    
?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="divisa_origen">Elige divisa:</label><br>
        <select id="divisa_origen" name="divisa_origen">
            <option value="USD">Dólar estadounidense (USD)</option>
            <option value="EUR">Euro (EUR)</option>
            <option value="GBP">Libra esterlina (GBP)</option>
            <option value="JPY">Yen japonés (JPY)</option>
        </select><br>
        <label for="divisa_destino">Elige divisa a convertir:</label><br>
        <select id="divisa_destino" name="divisa_destino">
            <option value="USD">Dólar estadounidense (USD)</option>
            <option value="EUR">Euro (EUR)</option>
            <option value="GBP">Libra esterlina (GBP)</option>
            <option value="JPY">Yen japonés (JPY)</option>
        </select><br>
        <label for="cantidad">Indica la cantidad:</label><br>
        <input type="text" name="cantidad" /><br>
        <input type="submit" name="enviar" value="Convertir">
    </form>
    <div id="resultado">
        <?php
        if (isset($_POST['enviar'])){
            echo $resultado;
        }
                
        ?>
    </div>


<?php
}
?>