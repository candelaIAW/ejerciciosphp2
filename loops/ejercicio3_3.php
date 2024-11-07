<?php
/* Crea un programa igual que el anterior pero que lance el dado mientras la suma total sea
menor de 100 */
$suma_acumulada = 0;
$lanzamiento_cuenta = 0;
while ($suma_acumulada <= 100) {
    $lanzamiento = rand(1,6);
    $suma_acumulada += $lanzamiento;
    $lanzamiento_cuenta++;
    echo "Lanzamiento $lanzamiento_cuenta: Dado= $lanzamiento, suma acumulada= $suma_acumulada<br>";
}

?>