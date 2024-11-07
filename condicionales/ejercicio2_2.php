<?php
/* Crea un programa en php con dos variables $n1 y $n2 aleatorias entre 0 y 20.
El programa debe escribir los valores e indicar un mensaje $n1 es mayor que $n2, $n2 es mayor que $n1 o bien que son iguales.*/
$n1 = rand(0,20);
$n2 = rand(0,20);
echo "El primer numero es: $n1<br>";
echo "El segundo numero es: $n2<br>";
if ($n1 > $n2) {
    echo "$n1 es mayor que $n2.";
} elseif ($n1 < $n2) {
    echo "$n2 es mayor que $n1.";
} else {
    echo "$n1 y $n2 son iguales";
}
?>

