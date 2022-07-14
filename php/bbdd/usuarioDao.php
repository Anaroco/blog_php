<?php 
require_once 'conectorBD.php';

function compruebaLogin($conn, $username, $clave) {
    $sql = " SELECT * FROM usuarios WHERE username = '$username' ";
    $rs = $conn->query($sql);
    $user = $rs->fetch_assoc();

    if($user && $user["clave"] == $clave) {
        return true;
    }
    return false;
}