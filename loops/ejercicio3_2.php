<?php
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $lanzamiento = rand(1,6);
    $suma += $lanzamiento;
    echo "Lanzamiento $i: Dado = $lanzamiento, Suma acumulada = $suma<br>";
}
?>