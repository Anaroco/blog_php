<?php

function handleUploadFile($nameInput)
{
    if (is_uploaded_file($_FILES[$nameInput]['tmp_name'])) {
        $nombreDirectorio = "uploads/" . date("m") . "/";
        if (!file_exists($nombreDirectorio)) {
            mkdir($nombreDirectorio, 0777, true);
        }

        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $_FILES[$nameInput]['name'];
        move_uploaded_file($_FILES[$nameInput]['tmp_name'], $nombreDirectorio . $nombreFichero);

        return $nombreDirectorio . $nombreFichero;
    } else {
        print("No se ha podido subir el fichero\n");
    }

}

//Tenemos envío del form de contacto
if (isset($_REQUEST["btnContactar"])) {
    $contacto = array(
        "nombre" => $_REQUEST["nombre"] ?? "",
        "email" => $_REQUEST["email"] ?? "",
        "tipoContacto" => $_REQUEST["tipoContacto"] ?? "",
        "asunto" => $_REQUEST["asunto"] ?? "",
        "mensaje" => $_REQUEST["mensaje"] ?? "",
        "heLeido" => isset($_REQUEST["heLeido"]) ? true : false,
    );
    if (isset($_FILES["anexo"])) {
        $contacto["anexo"] = handleUploadFile("anexo");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/estilos.php'?>
<link rel="stylesheet" href="css/maps.css">
</head>

<body>

<?php include 'includes/cabecera.php'?>
<?php include 'includes/nav.php'?>

  <h2 class="registro">💥 Registrate y recibiras cada dia tus noticias personalizadas 💥</h2><br>


    <div class="container2">

       <?php if (isset($contacto)) {?>
                    <p>Nombre: <?=$contacto["nombre"]?></p>
                    <p>Email: <?=$contacto["email"]?></p>
                    <p>Tipo contacto: <?=$contacto["tipoContacto"]?></p>
                    <p>Asunto: <?=$contacto["asunto"]?></p>
                    <p>He leido: <?=$contacto["heLeido"] ? "Si" : "No"?></p>
                    <p>Anexo: <?=$contacto["anexo"]?></p>
                    <p><a href="contacto.php">Volver</a></p>
                <?php } else {?>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <!-- <div class="form-group"> -->
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" required>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label for="tipoContacto">Tipo contacto</label>
                            <select name="tipoContacto" id="tipoContacto" required>
                                <option value="1">Sugerencia</option>
                                <option value="2">Queja</option>
                                <option value="3">Reclamación</option>
                            </select>
                        </div>
                        <div>
                            <label for="asunto">Asunto</label>
                            <input type="text" name="asunto" id="asunto" required>
                        </div>
                        <div>
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" required></textarea>
                        </div>
                        <div>
                            <label for="anexo">Anexo</label>
                            <input type="file" name="anexo" id="anexo">
                        </div>
                        <div>
                            <input type="checkbox" name="heLeido" id="heLeido" required>
                            <label class="withCheckbox" for="heLeido">He leido y acepto ...</label>
                        </div>
                        <div class="cntBotones">
                            <input type="submit" class="button" name="btnContactar" value="Contactar">
                        </div>
                        <div class="footerdown">
    <?php include "includes/footer.php";?>
    </div>
                    </form>
                <?php }?>
                
    </div>
    
    
    <div id="mapa">
      <div id="cntMapa"> </div>
        <script src="js/index.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo2spkHbD-wfnjw2cqvAaBo07Iq0dQ1e0&callback=initMap&v=weekly&channel=2" async></script>
      </div>
    </div>
    <div id="overlay"></div>

  </body>
</html>