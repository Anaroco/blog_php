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

    function createRandArrayOfNums(int $length=10):array {
        $length = ($length>=0) ? $length : 10;
        $arr = array();
        for($i=0;$i<$length;$i++) {
            array_push($arr, random_int(-200, 200));
        }

        return $arr;
    }   


    echo "== Ejercicio 1 ==<br><br>";

    $miArray = createRandArrayOfNums();
    echo "El array original es: <br>";
    print_r($miArray);
    echo "<br><br>";

    rsort($miArray);
    echo "El array ordenado de mayor a menor es: <br>";
    print_r($miArray);
    echo "<br><br>";

    function cmpImparesParesMenorMayor($a, $b) {
        $aEsImpar = $a%2!=0;
        $bEsImpar = $b%2!=0;

        if($aEsImpar && !$bEsImpar) {
            return -1;
        } else if (!$aEsImpar && $bEsImpar) {
            return 1;
        } else {
            // if($a < $b) {
            //     return -1;
            // } else if ($a > $b) {
            //     return 1;
            // } else {
            //     return 0;
            // }
            return $a <=> $b;
        }
    }
    
    usort($miArray, "cmpImparesParesMenorMayor");
    echo "El array ordenado con 'cmpImparesParesMenorMayor' es: <br>";
    print_r($miArray);
    echo "<br><br>";


/*
* 
*/

    echo "== Ejercicio 2 ==<br><br>";
    $miArrayNombres = array(
        "María", "Pepe", "Manolo", 
        "Juan", "Mónica", "Teresa", 
        "Esteban", "Santiago", "Silvia",
        "Alba", "Rosa", "Alberto"
    );
    
    echo "Mi array de nombres es <br>";
    print_r($miArrayNombres);
    echo "<br><br>";

    echo "María está en la posición -> ".array_search("María", $miArrayNombres);
    echo "<br>";
    $index = array_search("Santiago", $miArrayNombres);
    echo "Santiago está en la posición -> ".($index ? $index : "No existe");
    echo "<br>";
    $index = array_search("Ramón", $miArrayNombres);
    echo "Ramón está en la posición -> ".($index ? $index : "No existe");
    echo "<br>";
    echo "<br><br>";

    /*
    $var = ($index ? $index : "No existe");
    if($index) {
        $var = $index;
    } else {
        $var = "No existe";
    }
    */


    shuffle($miArrayNombres);
    echo "Mi array de nombres ordenado ramdon es <br>";
    print_r($miArrayNombres);
    echo "<br><br>";

    echo "El elemento de la posición 5 es -> $miArrayNombres[5] <br>";
    $nuevosNombres = array("Nuevo valor 1", "Nuevo valor 2");
    array_splice($miArrayNombres, 5, 1, $nuevosNombres);
    echo "Mi array de nombres queda así <br>";
    print_r($miArrayNombres);
    echo "<br><br>";


/*
* 
*/

    echo "== Ejercicio 3 ==<br><br>";
    $str = "manzana pera limón sandia melón";
    echo " La cadena str es -> $str <br>";
    $miArrDeStr = explode(" ", $str);
    echo "El array de str es ";
    print_r($miArrDeStr); 
    echo "<br>";

    array_splice($miArrDeStr, array_search("pera", $miArrDeStr), 1);
    array_unshift($miArrDeStr, "naranja");
    array_push($miArrDeStr, "mandarina");
    echo "El array despues de las transformaciones es ";
    print_r($miArrDeStr); 
    echo "<br>";
    $str = implode(" ", $miArrDeStr);
    echo " La nueva cadena str es -> $str <br>";

    /*
    unset($miArrDeStr[5]);
    $item = array_shift($miArrDeStr);
    array_splice($miArrDeStr, 5, 0, array("asdf"));
    */

    echo "<br><br>";
?>

</section>
        </main>

        <?php include "includes/footer.php";?>
    </div>
</body>
</html>