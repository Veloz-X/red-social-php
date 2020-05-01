<?php 
require('funciones.php');
require('clases/clases.php');
$error="";
    if(isset($_POST['registrar']))
    {   
        $contra=hash('sha512',$_POST['contra']);
        $datos =array(
            $_POST['nombre'],
            $_POST['usuario'],
            $contra,
            $_POST['pais'],
            $_POST['profe'],
            $_POST['edad']
        );
  
        if(datos_vacios($datos)==false){
            $datos = limpiar($datos);

            if(strpos($datos[1]," ")==false)
            {
                if (empty(usuarios::verificar($datos[1])))
                {
                    usuarios::registrar($datos);
                }else
                {
                    $error .="Usuario ya existe";
                }
            }else
            {
                $error .="usuario con espacios";
            }
        }else
        {
            $error .="Hay campo vacio";
        }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Registrar</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="contenedor-from">
    <h1>Registrar</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input class="input-control" type="text" name="nombre" placeholder="Nombre" >
        <input class="input-control" type="text" name="usuario" placeholder="Usuario">
        <input class="input-control" type="password" name="contra" placeholder="Contraseña">
        <input class="input-control" type="text" name="pais" placeholder="Pais">
        <input class="input-control" type="text" name="profe" placeholder="Profesion">
    
    <!-- SELECCION EDAD -->
    <p id="edad">Edad:
    <select name="edad" id="">
        <?php for($c=1;$c<=100;$c++): ?>
        <option value="<?php echo $c; ?> "><?php echo $c; ?></option>
        <?php endfor; ?>
    </select> 
    </p>
    <input type="submit" value="Registrar" name="registrar" class="log-btn">
    </form>

    <!-- ERROR -->
    <?php if(!empty($error)): ?>
    <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <!-- BOTON REGISTRAR -->
    <div class="registrar">
        <a href="login.php">Tienes Cuenta?</a>
    </div>
    </div>
</body>
</html>