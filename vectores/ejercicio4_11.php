<?php
/* Ordenar un array asociativo por valor: Crea un array asociativo con 5 nombres de productos y sus precios.
Ordena el array por precio en orden ascendente y muestra el array ordenado. */

$producto = array(
    "Bici" => "500",
    "Pelota" => "250",
    "Regla" => "5",
    "Silla" => "40",
    "Reloj" => "25",
);
asort($producto);
foreach ($producto as $nombre => $precio) {
    echo "Nombre: $nombre, Precio: $precio<br>";
}
?>