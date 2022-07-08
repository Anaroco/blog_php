<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $tituloPagina = "Contacto";
        include "incs/head.php" 
    ?>
</head>
<body>
    <div class="container">
        <?php include 'cabecera.php' ?>
        <?php include 'incs/menu.php' ?>

        <main id="wrapper" class="zona">
            <section id="cnt">

                <?php for($i = 1; $i<10; $i++) { ?>
                <table class="tblMulti">
                    <tr>
                        <th colspan="5">Tabla del <?=$i?></th>
                    </tr>
                    <?php for($j = 1; $j<=10; $j++) { ?>
                    <tr>
                        <td> <?=$i?> </td>
                        <td> x </td>
                        <td> <?=$j?> </td>
                        <td> = </td>
                        <td> <?=$i*$j?> </td>
                    </tr>
                    <?php } ?>
                </table>
                <?php } ?>

            </section>
        </main>

        <?php include 'incs/footer.php' ?>
    </div>
</body>
</html>
