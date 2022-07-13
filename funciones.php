<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/estilos.php'?>
</head>

<body>
    <div class="container">
        <?php include 'includes/cabecera.php'?>
        <?php include 'includes/nav.php'?>

        <main id="wrapper" class="zona">
            <section id="cnt">

                <?php
//Realizar una función que muestra si un número es par o impar

//$numero = htmlspecialchars($_POST["numero"]); suponiendo que el usuario lo introduzca por formulario

$numero = 9;

function esParImpar($numero): void
{
    if (($numero % 2) == 0) {
        echo $numero . ' es par';
    } else {
        echo $numero . ' es impar';
    }
}

echo "El numero  ";
esParImpar($numero);

echo "<br>";
echo "<br>";
echo "<br>";

//Crear una función capaz de calcular el cuadrado de un número dado
// Potencia 2 pow seria lo mismo que utilizar **
$numero = 3;
$numero_al_cuadrado = pow($numero, 2);

echo "El número $numero elevado al cuadrado es $numero_al_cuadrado";

echo "<br>";
echo "<br>";

//como funcion
$num = 5;
function getCuadrado(float $num): float
{
    return pow($num, 2);
}

echo "get Cuadrado $num";
echo "<br>";
echo "<br>";
echo "El cuadrado de $num es -> " . getCuadrado($num);
echo "<br>";
echo "<br>";
echo "<br>";

//Crear una función que retorne el nombre del mes actual

date_default_timezone_set("America/Mexico_City");

$mes = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"][date("n") - 1];

echo 'El mes es: ' .$mes;

echo "<br>";
echo "<br>";

/* otra forma de consegir las fechas es con funciones predefinidas
echo time();
time();

echo date('d.m.y');
$fecha_del_dia = date($formato);

echo "<br>";
echo "<br>";
 */

//Crear una función que sea capaz de calcular la media  de una secuencia cualquiera de n números

$numeros = [1, 2, 3, 4];
$suma = array_sum($numeros);
$total_numeros = count($numeros);
$media = $suma / $total_numeros;

echo 'La media de los números del array es: ' .$media;

echo "<br>";
echo "<br>";

//Aunque lo podríamos hacer mucho más reducido en una sola sentencia escribiendo:

echo $media = array_sum($numeros) / count($numeros);

echo "<br>";
echo "<br>";

// En una funcion
$numeros = [1, 2, 3, 4];

function calcular_media($numeros = [1, 2, 3, 4])
{

    $media = array_sum($numeros) / count($numeros);
    return $media;

}
echo calcular_media();

echo "<br>";
echo "<br>";

//Crear una función que reciba como parámetros el precio base y el porcentaje de IVA aplicable. La función deberá retornar el importe de IVA correspondiente. Por defecto, se aplicará el 21% de IVA

function calculo_iva($precio_bruto)
{
    return $precio_bruto * 0.21;
}

echo 'el iva es: ' . calculo_iva(100);

echo "<br>";
echo "<br>";

//funcion utilizada por el profe

function calcImporteIva(float $precioSinIva, float $porcentajeIva = 21): float
{
    return $precioSinIva * ($porcentajeIva / 100);
}

echo "== calcImporteIva(100) ==";
echo "<br>";
echo "El precio con iva es -> " . calcImporteIva(12);

echo "<br>";
echo "<br>";

echo "== calcImporteIva(100) ==";
echo "<br>";
echo "El precio con iva es -> " . calcImporteIva(100, 4);

echo "<br>";
echo "<br>";

echo "== calcImporteIva(123.8) ==";
echo "<br>";
echo "El precio con iva es -> " . calcImporteIva(123.8);

echo "<br>";
echo "<br>";

echo "== calcImporteIva(-123.8) ==";
echo "<br>";
echo "El precio con iva es -> " . calcImporteIva(-123.8);

echo "<br>";
echo "<br>";


?>

            </section>
        </main>

        <?php include "includes/footer.php";?>
    </div>
</body>

</html>