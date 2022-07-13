<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Tenemos envio del form de login
if (isset($_POST["btnLogIn"])) {
    $_SESSION["usuario"] = $_POST["user"] ?? "";
}

$nombre = "";
if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] != "") {
    $nombre = $_SESSION["usuario"];
}
?>

<div class="container">
<div id="cabecera" class="zona">
    <nav id="nav-idiomas">
        <a href="">Español
            <a href="">Inglés</a>
    </nav>


<div class="bienvenida">
<?php if ($nombre != "") {?>
                <p>Bienvenido <?=$nombre?>, <a href="logout.php">Salir</a></p>
            <?php } else {?>

<form class="frmInline" method="POST" >
     <label for="user">NOMBRE:</label>
     <input type="text" name="user" id="user">
     <input type="submit" value="Log In" name="btnLogIn">
</form>
<?php }?>

</div>
    <header>
        <img id="logo" src="imgs/avatar gato.png" width="200">
        <div>
            <h1 id="tituloPagina" class="tituloPagina">Noticias Gatunas</h1>
            <p>La mejor página de noticias del mundo mundial!!</p>
        </div>
    </header>
</div>

