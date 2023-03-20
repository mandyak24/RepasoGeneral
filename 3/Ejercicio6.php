<!-- Crear una página php donde se de tres oportunidades para adivinar un número prefijado
como en el ejercicio 4, pero en esta ocasión usando sesiones. -->

<?php
session_start();

if(isset($_SESSION['intento']) && isset($_SESSION['num']) && isset($_SESSION['objetivo'])){
    $intento = $_SESSION['intento'];
    $num = $_SESSION['num'];
    $objetivo = $_SESSION['objetivo'];
}else{ //Si no se han iniciado las variables de sesión es el inicio del juego
    $intento=0;
    $num=0;
    $objetivo=rand(1,10);
    $_SESSION['objetivo'] = $objetivo;
}

if($num != 0) {
    if($num == $objetivo) {
        echo "<br>¡Has ganado! ";
        echo "<br><a href='Ejercicio1.php'>Volver a intentar</a>";
        session_unset();
        session_destroy();
    } else {
        echo "<br>El número $num no es el objetivo. ";
    }
}

if($intento>=3){
    echo "<br>Perdiste. El número objetivo era $objetivo.";
    echo "<br><a href='Ejercicio1.php'>Volver a intentar</a>";
    session_unset();
    session_destroy();
}else{
    echo "Llevas $intento intento(s). ";
    echo "<form method='post' action='./Ejercicio1.php'>";
    echo "<label>Introduce un número del 1 al 10:</label>";
    echo "<input type='number' name='num' min='1' max='10' required>";
    echo "<input type='submit' value='Comprobar'>";
    echo "</form>";
    $_SESSION['intento'] = $intento + 1;
    //Tienes que verificar que el numero ha hecho POST
    if(isset($_POST['num'])){
        $_SESSION['num'] = $_POST['num'];
    }
   
}
?>
