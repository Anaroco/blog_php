<?php
//Realizar una función que muestra si un número es par o impar



//$numero = htmlspecialchars($_POST["numero"]); suponiendo que el usuario lo introduzca por formulario

//$numero = 0;


function esParImpar($numero):void{
if (($numero % 2) == 0) {
    echo $numero . ' es par';
} else {
    echo $numero . ' es impar';
}
}


//Crear una función capaz de calcular el cuadrado de un número dado

$numero = 5;
$numero_al_cuadrado = pow($numero, 2); // Potencia 2
echo "El número $numero elevado al cuadrado es $numero_al_cuadrado";


//Crear una función que retorne el nombre del mes actual

date_default_timezone_set("America/Mexico_City");
$mes = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"][date("n") - 1];
echo $mes;

// otra forma de consegir las fechas es con funciones predefinidas
echo time();
time();

echo date('d.m.y'); 
$fecha_del_dia = date($formato);  


//Crear una función que sea capaz de calcular la media  de una secuencia cualquiera de n números

$numeros = [1,2,3,4];
$suma = array_sum($numeros);
$total_numeros = count($numeros);
$media = $suma/$total_numeros;


    //Aunque lo podríamos hacer mucho más reducido en una sola sentencia escribiendo:

     $media = array_sum($numeros)/count($numeros);

//Crear una función que reciba como parámetros el precio base y el porcentaje de IVA aplicable. La función deberá retornar el importe de IVA correspondiente. Por defecto, se aplicará el 21% de IVA

function calculo_iva($precio_bruto) {  
    return $precio_bruto * 1.21;  
  } 

  calculo_iva(12);

  