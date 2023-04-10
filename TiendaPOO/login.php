<?php
session_start();
include 'include/DB.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>ServiTech</h2>
        <div class="row mt-3 justify-content-md-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input class="form-control" name="usuario" type="text" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input class="form-control" name="contrasena" type="password" placeholder="Contraseña">
                    </div>
                    <button class="btn btn-sm btn-block btn-primary" name="login" type="submit">Iniciar sesión</button>
                </form>
                <a href="registro.php">No eres usuario? click para Registrar</a>
            </div>

</body>

</html>


<!-- Codigo para verificar usuario  -->
<?php
$conexion = new DB();
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['contrasena'];


    if ($conexion->verificarUsuario($usuario, $password)) {
        header("Location:./index.php");
        exit();
    } else {
        $mensaje_error = "Usuario o contraseña incorrectos";
    }
}
?>