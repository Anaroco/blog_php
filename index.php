<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
//echo sesion_id()

?>

<!DOCTYPE html>
<html lang="en">

<head>

<?php include 'includes/estilos.php'?>
</head>

<body>

<?php include 'includes/cabecera.php'?>
<?php include 'includes/nav.php'?>

<div class="container">

        <main id="wrapper" class="zona">
            <section id="cnt">
                <article class="noticia">
                    <h1>Gatos en el salón</h1>
                    <img src="imgs/gato.jpg" width="100" alt="asfasdf" title="asdfasd asd fasdf ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, beatae omnis. Ipsa,
                        reprehenderit at. Officiis minima ducimus libero nulla aut, et fuga vitae ratione quis
                        repudiandae maxime accusamus unde nobis.</p>
                    <p class="leermar"><a href="">Leer más</a></p>
                </article>
                <article class="noticia">
                    <h1>Gatos en la cocina</h1>
                    <img src="imgs/fondo.jpg" width="100">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, beatae omnis. Ipsa,
                        reprehenderit at. Officiis minima ducimus libero nulla aut, et fuga vitae ratione quis
                        repudiandae maxime accusamus unde nobis.</p>
                    <p class="leermar"><a href="">Leer más</a></p>
                </article>
                <nav class="paginacion">
                    <ul>
                        <li><a href="" class="disabled">&lt; Prev</a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="contacto.php">Next &gt;</a></li>
                    </ul>
                </nav>
            </section>
            <aside id="barraLateral">
                <article class="noticia relacionada">
                    <h1>Título de la noticia 1</h1>
                    <time datetime="2022-07-04">Publicado hoy</time>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, beatae omnis. Ipsa,
                        reprehenderit at. Officiis minima ducimus libero nulla aut, et fuga vitae ratione quis
                        repudiandae maxime accusamus unde nobis.</p>
                    <p class="leermar"><a href="">Leer más</a></p>
                </article>
                <article class="noticia relacionada">
                    <h1>Título de la noticia 2</h1>
                    <time datetime="2022-07-04">Publicado el 04/07/2022</time>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, beatae omnis. Ipsa,
                        reprehenderit at. Officiis minima ducimus libero nulla aut, et fuga vitae ratione quis
                        repudiandae maxime accusamus unde nobis.</p>
                    <p class="leermar"><a href="">Leer más</a></p>
                </article>
            </aside>
        </main>
       <?php include "includes/footer.php";?>
    </div>
  </body>

</html>
