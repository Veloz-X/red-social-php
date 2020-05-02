<?php 

class usuarios{
    public static function registrar($datos)
    {
        $con= conexion("root","");
        $consulta=$con->prepare("insert into usuarios(CodeUser, nombre, usuario, pass, pais, profesion, edad)
        value(null, :nombre, :usuario, :pass, :pais, :profesion, :edad)");
        $consulta->execute(array(
            ':nombre'=>$datos[0],
            ':usuario'=>$datos[1],
            ':pass'=>$datos[2],
            ':pais'=>$datos[3],
            ':profesion'=>$datos[4],
            ':edad'=>$datos[5],
        ));
    }
    public static function verificar($usuario)
    {
        $con= conexion("root","");
        $consulta=$con->prepare("select * usuarios where usuario = :usuario ");
        $consulta->execute(array(':usuario'=>$usuario));
        $resultado =$consulta->fetchAll();
        return $resultado;

    }
}

?>