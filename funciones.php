<?php 

function conexion($usuario,$contra){
    try{
        $con= new PDO('mysql:host=localhost;dbname=red_social',$usuario,$contra);
        // echo "Base de datos conectada";
        return $con;
        
    }catch(PDOException $e){
        return $e->getMessage();

    }
}
// FUNCION ARREGLADA
function datos_vacios($datos)
{
    $vacio = false;
    $tam = count($datos);
    for($c=0; $c<$tam; $c++)
    {
        if(empty($datos[$c]))
        {
            $vacio =true;
            break;
        }
    }
    return $vacio;
}
function limpiar($datos){
    $tam = count($datos);
    for($c=0 ;$c<$tam; $c++){
        if($c != 2){
            $datos[$c] = htmlspecialchars($datos[$c]);
            $datos[$c] = trim($datos[$c]);
            $datos[$c] = stripcslashes($datos[$c]);
        }
    }
    return $datos;
}
?>