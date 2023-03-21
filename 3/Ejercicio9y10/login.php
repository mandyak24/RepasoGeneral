<!--Parte de login:
El programa tendrá un array con usuarios ya registrados que serán:
o Usuario: admin, password: admin
o Usuario: usuaRIO, password: u$suar10
Si un usuario se identifica correctamente como usuario normal, el programa
redirigirá a una página que recibe el nombre del usuario y muestra el mensaje de
‘Bienvenido + nombre de usuario’.
Si un usuario no se identifica correctamente, en el mismo formulario se muestra un
mensaje diciendo “Identificación incorrecta” y el formulario además conserva los
datos que se introdujeron.
ATENCIÓN: la comparación de usuario y contraseña ha de ser exacta. Es decir, no
es lo mismo usuario que usuaRIO. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <h1>LOGIN</h1>
<form method="POST" action="">
    <label for="usuario">User:</label><br> <!--Intentar cambiar el get por el post -->
    <input type="text" id="usuario" name="usuario" value="<?php if(isset($_GET['usuario'])){ echo $_GET['usuario']; }?>"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" value="<?php if(isset($_GET['usuario'])){ echo $_GET['password']; }?>" ><br>
    <input type="submit" name="login" value="Login"><br><br>
</form>
<a href="registro.php">No eres usuario? click para Registrar</a>
<?php
//Usuarios con su contraseña existentes:
$users=array(
    'admin'=>'admin',
    'usuaRIO'=>'u$suario'
);

if(isset($_POST['login'])){
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];

    if(array_key_exists($usuario,$users)){
        if(array_key_exists($usuario,$users)){
            if (strcasecmp($users[$usuario], $password) === 0) {
            header("Location:bienvenida.php?usuario=".$usuario);
            } 
        }else{
            echo "<br>";
            echo "La contraseña ingresada es incorrecta.";

        }
    }else{
        echo "<br>";
        echo "El usuario ingresado no existe";
    }
}
?>
</body>
</html>