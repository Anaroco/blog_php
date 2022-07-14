<?php

require_once 'conectorBD.php';

function findNoticiaById($conn, $id) {
    $sql = "SELECT * FROM noticias WHERE id = $id ";
    $rs = $conn->query($sql);
    $noticia = $rs->fetch_assoc();
    
    return $noticia;
}

function findAllNoticias($conn, $page = 1, $resPorPage=ROWS_PER_PAGE) {
    $sql = " SELECT * FROM noticias ";
    $sql.= " LIMIT $resPorPage OFFSET ". (($page-1)*$resPorPage);
    
    $rs = $conn->query($sql);

    $noticias = [];
    if($rs->num_rows>0) {
        // recorremos todos los resultados y los añadimos en el array

        // while($row = $rs->fetch_assoc()) {
        
        //     Si los nombres de las cols no se corresponden con los nombres de las claves 
        //     que queremos manejar tenemos que hacer algo tal que así
             
        //     array_push($noticias, array(
        //         "titulo" => $row["titulo"],
        //         "contenido" => $row["contenido"],
        //         "imagen" => $row["imagen"],
        //         "fecha" => $row["fecha"]
        //     ));
        
        //     Si los nombres coinciden podría ser más sencillo
        //     array_push($noticias, $row);
        // }

        //también podemos llamar directamente al método fetch_all que nos hace algo similar al while de arriba
        $noticias = $rs->fetch_all(MYSQLI_ASSOC);
    }

    return $noticias;
}

function countAllNoticias($conn) {
    $sql = "SELECT count(*) as total FROM noticias ";
    $rs = $conn->query($sql);
    $row = $rs->fetch_assoc();
    
    return $row["total"];
}

function saveNoticia($conn, $noticia) {
    $esNueva = !isset($noticia["id"]) || !is_numeric($noticia["id"]) || $noticia["id"]<=0;
    
    if($esNueva) {
        $sql = "INSERT INTO ";
    } else {
        $sql = "UPDATE ";
    }
    $sql .= " noticias SET ";

    $sql .= " titulo = '{$noticia["titulo"]}'";
    $sql .= ", contenido = '{$noticia["contenido"]}'";
    if ( isset($noticia["imagen"]) ) {
        $sql .= ", imagen = '{$noticia["imagen"]}'";
    }

    if(!$esNueva) {
        $sql.= " WHERE id = ".$noticia["id"];
    }

    // echo $sql."<br>";

    return $conn->query($sql);
}

function deleteNoticia($conn, $id){
    $sql = " DELETE FROM noticias where id = $id ";
    return $conn->query($sql);
}