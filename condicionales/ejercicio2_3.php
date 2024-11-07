<?php
/* Crea un programa en php con tres variables aleatorias $n1, $n2, $n3. El programa
mostrará sus valores y posteriormente los mostrará ordenados de mayor a menor.*/
$n1=rand(0,20);
$n2=rand(0,20);
$n3=rand(0,20);

echo "El primer numero es: $n1<br>";
echo "El segundo numero es: $n2<br>";
echo "El tercer numero es: $n3<br>";

if ($n1 >= $n2 && $n1 >= $n3) {
    echo "Orden: $n1";
    if ($n2 >= $n3) {
        echo ", $n2, $n3";
    } else { 
        echo ", $n3, $n2";
    }
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    echo "Orden: $n2";
    if ($n1 >= $n3) {
        echo ", $n1, $n3";
    }    
} else {
    echo "Orden: $n3";
    if ($n1 >= $n2) {
        echo ", $n1, $n2";
    } else {
        echo ", $n2, $n1";
    }
}
?>