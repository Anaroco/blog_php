<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    session_destroy();

    $destino = "index.php";
    if($_SERVER["HTTP_REFERER"]!="") {
        $destino = $_SERVER["HTTP_REFERER"];
    }

    header("Location: $destino");

