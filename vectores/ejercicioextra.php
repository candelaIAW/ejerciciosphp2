<?php
/* Hacer un array con 5 valores para dos asignaturas, donde se imprima una frase
estilo "Fulanito tiene un 5 y 8 y su media da x." */

$personas =  array(
    "Fulanito" => [
        "BBDD" => 5,
        "IAW" => 8
    ]
    );

$persona = "Fulanito";
$notas = $personas[$persona];

$media = array_sum($notas) / count($notas);

echo "$persona tiene un " . $notas["BBDD"] . " en BBDD y un " . $notas["IAW"] . " en IAW, y su media es $media";
?>
