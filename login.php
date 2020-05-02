<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="contenedor-from">
    <h1>Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" name="Usuario" class="input-control" placeholder="Usuario">
    <input type="text" name="pass" class="input-control" placeholder="Contraseña">
    <input type="submit" name="acceder" class="log-btn" value="Iniciar Sesion">
    <a href="registrar.php"><p>No tengo Cuenta</p></a>
    </form>
</div>


    
</body>
</html>