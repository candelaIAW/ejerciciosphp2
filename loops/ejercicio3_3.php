<?php
$suma_acumulada = 0;
$lanzamiento_cuenta = 0;
while ($suma_acumulada < 100) {
    $lanzamiento = rand(1,6);
    $suma_acumulada += $lanzamiento;
    $lanzamiento_cuenta++;
    echo "Lanzamiento $lanzamiento_cuenta: Dado= $lanzamiento, suma acumulada= $suma_acumulada<br>";
}

echo "<br>La suma total ha alcanzado o superado 100. El programa ha terminado.";
?>