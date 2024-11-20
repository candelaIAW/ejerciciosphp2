<?php
/* Genera una función que reciba como parámetro un número y devuelva un booleano indicando si es primo o no.
Utiliza la función para calcular todos los primos entre uno y un millón. */

function es_primo($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$primos = [];
for ($i = 1; $i <= 1000000; $i++) {
    if (es_primo($i)) {
        $primos[] = $i;
    }
}
print_r($primos);
?>