<?php

require_once 'php/bbdd/noticiasDao.php';
require_once 'php/inc/functions.php';

$accion = $_GET["accion"] ?? "";
$id = $_REQUEST["id"] ?? "";
$showForm = false;

if($accion=="nueva" || $accion=="editar") {
    $showForm = true;
    
    $noticia = array("id"=>"","titulo"=>"", "contenido"=>"");
    if($id!="") {
        $noticia = findNoticiaById($conn, $id);
    }

    if(isset($_REQUEST["btnGuardar"])) {
        $noticia["titulo"]= $_REQUEST["titulo"] ?? "";
        $noticia["contenido"] = $_REQUEST["contenido"] ?? "";

        if(isset($_FILES["imagen"])) {
            $noticia["imagen"] = handleUploadFile("imagen");
        }

        if(saveNoticia($conn, $noticia)){
            header("Location: admin-noticias.php");
        }
    }

    
} else if($accion=="eliminar") {
    if($id!="") {
        deleteNoticia($conn, $id);
        header("Location: admin-noticias.php");
    }
} else {
    $nTotal = countAllNoticias($conn);
    $nTotalPages = ceil($nTotal/ROWS_PER_PAGE);
    $page = $_GET["page"] ?? 1;
    $lstNoticas = findAllNoticias($conn, $page);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "incs/head.php" ?>
    
</head>
<body>
    <div class="container">
        <?php include 'incs/cabecera.php' ?>
        <?php include 'incs/menu.php' ?>

        <main id="wrapper" class="zona">
            <section id="cnt">
                <?php if ($showForm) { ?>
                    <h1>Alta/Edición noticia</h1>
                    <form action="admin-noticias.php?accion=<?=$accion?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$noticia["id"]?>">
                        <p>
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" value="<?=$noticia["titulo"]?>" required>
                        </p>
                        <p>
                            <label for="contenido">Contenido</label>
                            <textarea name="contenido" required><?=$noticia["contenido"]?></textarea>
                        </p>
                        <p>
                            <label for="imagen">Imagen</label>
                            <input type="file" name="imagen">
                        </p>
                        <p class="cntBotones">
                            <a class="button" href="admin-noticias.php">Cancelar</a>
                            <input class="button" type="submit" name="btnGuardar" value="Guardar">
                        </p>
                    </form>
                <?php } else { ?> 
                    <p>
                        <a href="?accion=nueva">Nueva noticia</a>
                    </p>

                    <table class="tblListado">
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    <?php  foreach($lstNoticas as $noticia) { ?>
                        <tr>
                            <td class="text-center"><?=$noticia["id"]?></td>
                            <td class="text-center">
                                <?php if($noticia["imagen"]!="") {?> 
                                    <img width="80" src="<?=$noticia["imagen"]?>"> 
                                <?php } ?>
                            </td>
                            <td><?=$noticia["titulo"]?></td>
                            <td><?=$noticia["fecha"]?></td>
                            <td class="acciones text-center">
                                <a href="?accion=editar&id=<?=$noticia["id"]?>">Editar</a>
                                <a href="?accion=eliminar&id=<?=$noticia["id"]?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>

                    <?php include 'incs/paginador.tpl.php' ?>
                <?php } ?>
            </section>
        </main>

        <?php include 'incs/footer.php' ?>
    </div>
</body>
</html>