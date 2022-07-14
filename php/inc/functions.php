<?php 

function handleUploadFile($nameInput) {
    if (is_uploaded_file ($_FILES[$nameInput]['tmp_name'])) {
        $nombreDirectorio = "uploads/".date("m")."/";
        if(!file_exists($nombreDirectorio)){
            mkdir($nombreDirectorio, 0777, true);
        }

        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $_FILES[$nameInput]['name'];
        move_uploaded_file ($_FILES[$nameInput]['tmp_name'],  $nombreDirectorio . $nombreFichero);

        return $nombreDirectorio . $nombreFichero;
    }
}