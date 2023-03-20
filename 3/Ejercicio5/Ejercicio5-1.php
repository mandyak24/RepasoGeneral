<?php
session_start();
// comprobar si ya hay una sesión iniciada
if(isset($_SESSION['username'])){
    header("Location:Ejercicio5-2.php");
}
// comprobar si se han enviado los datos del formulario
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username=="profe" && $password=="123"){

    $_SESSION['username']=$username;
    //redirigir a la pagina 2
    header("Location:Ejercicio5-2.php");
  } else {
    $error = "Usuario o contraseña incorrectos";
  }
}

if(isset($_POST['siguiente'])){
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php if(isset($error)) echo "<p>$error</p>"; ?>
<form method="post" action="">
    <label for="username">Usuario:</label>
    <input type="text" name="username" id="username"><br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" name="submit" value="Enviar">
    <input type="submit" name="siguiente" value="Siguiente">
</form>
</body>
</html>