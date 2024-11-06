<?php

$n1 = 37;
$esPrimo = true;
echo "Los divisores de $n1 son:<br>";
for ($i =1; $i <= $n1; $i++) {
    if ($n1 % $i == 0) {
        echo $i . "<br";
        if ($i != 1 && $i != $n1) {
            $esPrimo = false;
        }
    }
}

if ($esPrimo) {
    echo "<br>$n1 es un número primo.";
} else {
    echo "<br>$n1 no es un número primo.";
}
?>