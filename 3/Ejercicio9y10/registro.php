
<!--Parte de registro:
Si una persona se registra, los datos se envían a la misma página del registro,
donde se comprueba que han llegado todos los datos necesarios (los que cada uno
considere, mínimo usuario y contraseña). Si no son correctos, vuelve a mostrar el
formulario de registro indicando en color destacado los datos incorrectos o que
faltan dentro de los correspondientes campos del formulario. Si los datos son
correctos, redirigirá a login.php en cuyo formulario se mostrará el usuario y
contraseña que introdujeron en el registro. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');
        body{
            
            background:radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            font-family: 'Cabin', sans-serif;
            text-align: center;
        }

    </style>
</head>
<body>

<?php

if(isset($_POST['signup'])){
    $usuario=$_POST['usuario'];
    $password = $_POST['password'];

    $errores=array();
    if(empty($usuario)){
        $errores['usuario']='El nombre de usuario es requerido';
    }
    if(empty($password)){
        $errores['password'] = 'La contraseña es requerida';
    }

    if(count($errores) == 0){
        header("Location: login.php?usuario=$usuario&password=$password");
        exit;
    }
}


?>
    
<h1>REGISTRO</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label for="usuario">New User:</label><br>
    <input type="text" id="usuario" name="usuario" value="<?php echo isset($_POST['usuario']) ? $_POST['usuario'] : ''; ?>"><br>
    <?php if(isset($errores['usuario'])) { ?>
            <span style="color: red;"><?php echo $errores['usuario']; ?></span><br>
        <?php } ?>
    <label for="password">New Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <?php if(isset($errores['password'])) { ?>
            <span style="color: red;"><?php echo $errores['password']; ?></span><br>
        <?php } ?>
    <input type="submit" name="signup" value="Registrarse"><br>
</form>
<a href="login.php">Ya tienes cuenta? Inicia sesion</a>
</body>
</html>

