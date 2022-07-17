<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/estilos.php' ?>
</head>
 
<body>
    <div class="container">
        <?php include 'includes/cabecera.php' ?>
        <?php include 'includes/nav.php' ?>
        

        <main id="wrapper" class="zona">
            <section id="cnt">
    <?php
    //echo session_status();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
//    echo "<b>";
//echo session_status();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

//CONTROL

function dameValorGet($param, $default=""){
    if (array_key_exists($param, $_GET) && $_GET[$param]!="") {
        $valorParam = $_GET[$param];
    } else {
        $valorParam = $default;
    }
    
    // $valorParam = $_GET[$param] ?? $default;
    return $valorParam;
}
function dameValorPost($param, $default=""){
    if (array_key_exists($param, $_POST) && $_POST[$param]!="") {
        $valorParam = $_POST[$param];
    } else {
        $valorParam = $default;
    }
    
    // $valorParam = $_POST[$param] ?? $default;
    return $valorParam;
}
function dameValorSession($param, $default=""){
    if (array_key_exists($param, $_SESSION) && $_SESSION[$param]!="") {
        $valorParam = $_SESSION[$param];
    } else {
        $valorParam = $default;
    }
    
    // $valorParam = $_SESSION[$param] ?? $default;
    return $valorParam;
}
print_r($_COOKIE);
function dameValorCookie($param, $default=""){
    if (array_key_exists($param, $_COOKIE) && $_COOKIE[$param]!="") {
        $valorParam = $_COOKIE[$param];
    } else {
        $valorParam = $default;
    }
    
    // $valorParam = $_COOKIE[$param] ?? $default;
    return $valorParam;
}

// $nombreGet = dameValorGet("nombre", "Anónimo");
$nombrePost = dameValorPost("nombre", "Anónimo");

print_r($_FILES);

function handleUploadFile($nameInput) {
    if (is_uploaded_file ($_FILES[$nameInput]['tmp_name'])) {
        $nombreDirectorio = "uploads/";
        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $_FILES[$nameInput]['name'];
        move_uploaded_file ($_FILES[$nameInput]['tmp_name'],  $nombreDirectorio . $nombreFichero);

        return $nombreDirectorio . $nombreFichero;
    } else
        print ("No se ha podido subir el fichero\n");
}

if( dameValorPost("btnEnviar", "") != "") {
    echo "Formulario enviado!!!!";
    $pathuploaded = handleUploadFile("anexo");

    //así escomo podemos guardar cosas en la sesión
    $_SESSION["nombre"] = $nombrePost;
    setCookie("nombre", $nombrePost, time()+60);
    //unset($_SESSION["nombre"]);  //esto elimina solo este valor de la sesión
}

?>

<?php /// VISTA ?>



<form method="POST" enctype="multipart/form-data">
    <p>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?=$nombrePost!="Anónimo" ? $nombrePost : ""?>">
    </p>
    <p>
        <label for="anexo">Anexo:</label>
        <input type="file" name="anexo">
    </p>
    <p>
        <label for="imgPerfil">Imagen perfil:</label>
        <input type="file" name="imgPerfil">
    </p>
    <input type="submit" value="Enviar" name="btnEnviar">
</form>

<?php if( isset($pathuploaded) ) { ?>
    <img src="<?=$pathuploaded?>" alt="">
<?php } ?>

<p>Bienvenido <?=$nombrePost?></p>
<p>GET: <?=dameValorGet("nombre")?></p>
<p>POST: <?=dameValorPost("nombre")?></p>
<p>SESSION: <?=dameValorSession("nombre")?></p>
<p>COOKIE: <?=dameValorCookie("nombre")?></p>

?>

</section>
        </main>

        <?php include "includes/footer.php";?>
    </div>
</body>
</html>