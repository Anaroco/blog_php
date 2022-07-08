<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/estilos.php' ?>
    <link rel="stylesheet" href="css/maps.css">

</head>

<body>
<?php include 'includes/cabecera.php' ?>
<?php include 'includes/nav.php' ?>
<div class="container">
        
    
        <h2 class="registro">💥 Registrate y recibiras cada dia tus noticias personalizadas 💥</h2><br>




        <form method="get" action="procesar.html" id="formulario">
            <div class="form-group">
                <p>
                    <label for="nombreID">Nombre..........</label>
                    <input name="nombre" required id="nombre" type="text" class="form-control">
                </p>
                <br>
                <p>
                    <label for="password">password.....</label>
                    <input type="password" id="password" name="password">
                </p>
                <br>
                <p>
                    <label for="email1">Email................</label>
                    <input type="email" id="email1" name="email1">
                </p>
                <br>
                <p>
                    <label for="email2">Repite email.</label>
                    <input type="email" id="email2" name="email2" onchange="compruebaEmails()">
                </p>
                <br>
                <p>
                <p>Categorias</p>
                <label for="check1">Mascotas</label>
                <input type="checkbox" id="check1" name="categorias[]">
                <label for="check2">Cuidados</label>
                <input type="checkbox" id="check2" name="categorias[]">
                </p>
                <br>
                <button class="colorBoton" type="submit">Enviar</button>
                </p>
            </div>
        </form>

  

    <div id="mapa">

        <div id="cntMapa"> </div>
        
        <script src="js/index.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo2spkHbD-wfnjw2cqvAaBo07Iq0dQ1e0&callback=initMap&v=weekly&channel=2" async></script>
      
    </div>
    
</div>

<script src="js/index.js"></script>
<script src="js/app.js"></script>

<div id="overlay"></div>

</body>

</html>
