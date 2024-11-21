<?php
function cuenta_numeros(array $numeros){
    $frecuencias = array_count_values($numeros);
    $maxfrecuencia = max($frecuencias);
    $numero_mas_frecuente=array_search($maxfrecuencia, $frecuencias);
    return $numero_mas_frecuente;
}

$num=[1,2,2,2,2,3,3,3,4,4,4,4,4,4,4,4];
print_r($num);
echo "<br>";
echo "numero mas frecuente ". cuenta_numeros($num). "<br>";
?>