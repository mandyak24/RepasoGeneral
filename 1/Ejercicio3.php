<?php
$decimal = 12.5; // Variable de tipo decimal
$binario = 0b1010; // Variable de tipo binario (equivalente a 10 en decimal)

echo "Variable decimal: $decimal <br>";
echo "Variable binaria: $binario <br>";

// Operaciones aritméticas
$suma = $decimal + $binario;
$resta = $decimal - $binario;
$multiplicacion = $decimal * $binario;
$division = $decimal / $binario;

echo "Suma: $suma <br>";
echo "Resta: $resta <br>";
echo "Multiplicación: $multiplicacion <br>";
echo "División: $division <br>";

// Operaciones de comparación
if ($decimal == $binario) {
  echo "Las variables son iguales <br>";
} else {
  echo "Las variables son diferentes <br>";
}

if ($decimal > $binario) {
  echo "La variable decimal es mayor <br>";
} else {
  echo "La variable binaria es mayor <br>";
}

// Operaciones de incremento/decremento
$decimal++;
echo "Incremento de la variable decimal: $decimal <br>";

$binario--;
echo "Decremento de la variable binaria: $binario <br>";
?>
