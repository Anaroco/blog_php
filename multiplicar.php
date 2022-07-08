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

        <?php include "includes/footer.php";?>
    </div>
</body>
</html>


