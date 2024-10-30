<?php
//CANDELA PEJ ARROYO
//Generamos dos números aleatorios entre 0 y 20
$n1 = rand(0,20);
$n2 = rand(0,20);
//Mostramos los valores de los numeros aleatorios
echo "El primer numero es: $n1<br>";
echo "El segundo numero es: $n2<br>";
//Ejecutamos la condición para que, si  un valor es mayor o menos que otro, pongo un mensaje, y si no ponemos que los numeros son iguales"
if ($n1 > $n2) {
    echo "$n1 es mayor que $n2.";
} elseif ($n1 < $n2) {
    echo "$n2 es mayor que $n1.";
} else {
    echo "$n1 y $n2 son iguales";
}
?>

