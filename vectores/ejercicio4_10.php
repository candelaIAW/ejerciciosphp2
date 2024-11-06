<?php

/* Ordenar un array asociativo por clave: Crea un array asociativo con 5 nombres de empleados y sus salarios.
Ordena el array por nombre en orden ascendente y muestra el array ordenado. */

$empleados = array(
    "Carmen" => "1800",
    "María" => "2000",
    "Paula" => "1500",
    "Ana" => "1700",
);

ksort($empleados);
foreach ($empleados as $nombre => $salario) {
    echo "Nombre: $nombre, Salario: $salario<br>";
}
?>