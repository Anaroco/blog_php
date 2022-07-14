<?php if(isset($noticia)) { ?>
    <?php $clasesExtra = isset($clasesExtra) ? $clasesExtra : "" ?>

    <article class="noticia <?=$clasesExtra?>">
        <h1><?=$noticia["titulo"]?></h1>
        <?php if(array_key_exists("fecha", $noticia) && $noticia["fecha"]!="") { ?>
            <time datetime="<?=$noticia["fecha"]?>">Publicado el <?=$noticia["fecha"]?></time>
        <?php } ?> 
        <?php if(array_key_exists("imagen", $noticia) && $noticia["imagen"]!="") { ?>
            <img src="<?=$noticia["imagen"]?>" width="100" alt="asfasdf" title="asdfasd asd fasdf ">
        <?php } ?>
        <p><?= str_replace("\n", "<br>", $noticia["contenido"])?></p>
        <p class="leermar"><a href="">Leer más</a></p>
    </article>

    <?php unset($clasesExtra); ?>
<?php } ?>