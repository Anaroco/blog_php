<?php 
function conectar() {
    $user="root";
    $pass="";
    $server="localhost";
    $db="curso_php2";
    
    $con=mysql_connect("localhost", "root","curso_php2") or die ("Error al conectar la base de datos".mysql_error());
    mysql_select_db($db,$con);

    return $con;

}

$con=conectar();

echo "se realizo exitosamente la conexion a la base de datos";

















?>