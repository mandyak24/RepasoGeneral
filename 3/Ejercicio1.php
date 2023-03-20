<!-- Crear en un único fichero php un juego de adivinar un número del 1 al 10 en tres intentos.
Ha de comprobar si recibe por GET los valores intento,num y “objetivo”. Si no vienen
se supone que es el inicio del juego: ha de sacar un número aleatorio del 1 al 10 y en la
página pedirlo mediante un formulario. En caso contrario ha de indicar cuántos intentos
lleva y el mismo formulario. El formulario se envía a la misma página. Si el intento es
superior a 3 ha de mostrar &quot;Perdiste&quot; y un enlace para volverlo a intentar. Si acierta con el
número aleatorio mostrará &quot;has ganado&quot; y el mismo enlace. Se ha de almacenar en un
input de tipo hidden tanto el valor de intento como el objetivo. Cada vez que se envía un
número &quot;intento&quot; debe valer uno más. -->


<?php

if(isset($_GET['intento']) && isset($_GET['num']) && isset($_GET['objetivo'])){
    $intento = $_GET['intento'];
    $num = $_GET['num'];
    $objetivo = $_GET['objetivo'];
}else{ //Si no se reciben los parametros por GET es el inicio del juego

$intento=0;
$num=0;
$objetivo=rand(1,10);

}

if($num != 0) {
    if($num == $objetivo) {
        echo "<br>¡Has ganado! ";
        echo "<br><a href='Ejercicio1.php'>Volver a intentar</a>";
    } else {
        echo "<br>El número $num no es el objetivo. ";
    }
}

if($intento>=3){

    echo "<br>Perdiste. El numero objetivo era $objetivo.";
    echo "<br><a href='Ejercicio1.php'>Volver a intentar</a>";

}else{
    echo "Llevas $intento intento(s). ";
    echo "<form method='get' action='./Ejercicio1.php'>";
    echo "<label>Introduce un número del 1 al 10:</label>";
    echo "<input type='number' name='num' min='1' max='10' required>";
    echo "<input type='hidden' name='objetivo' value='$objetivo'>";
    echo "<input type='hidden' name='intento' value='".($intento+1)."'>";
    echo "<input type='submit' value='Comprobar'>";
    echo "</form>";
}



?>