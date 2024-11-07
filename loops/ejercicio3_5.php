<?php
/* Crea un programa con una variable $n1 a la que daremos valor en el código. Escribe
todos los números de $n1 al 0 contando hacia atrás. Si el número es negativo
deberá cambiar su valor a positivo. */
$n1 = 7;
if ($n1 < 0) {
    $n1 = abs($n1);
}

for ($i = $n1; $i >= 0; $i--) {
    echo $i . "<br>";
}
?>