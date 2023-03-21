<!-- PANTALLA DE ACCESO (1) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>ONLINE SHOP</h2>
<form method="POST" action="login.php">
   
    <label for="usuario">User:</label><br>
    <input type="text" id="usuario" name="usuario" value="<?php if(isset($_POST['usuario'])){ echo $_POST['usuario']; }?>"><br>
    
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" value="<?php if(isset($_POST['usuario'])){ echo $_POST['password']; }?>" ><br>
    
    <input type="submit" name="login" value="Login"><br><br>
</form>

<!-- <a href="registro.php">No eres usuario? click para Registrar</a> -->

<?php
require_once "conn.php";
$conn=conectar();

if(isset($_POST['login'])){
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

  
$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 1) {
    // El usuario y la contraseña son correctos
    // Iniciar sesión y redirigir a la página de bienvenida
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: bienvenida.php");
    exit();
} else {
    // El usuario o la contraseña son incorrectos
    echo "<p class='error'>Usuario o contraseña incorrectos.</p>";
}
}
?>
</body>
</html>