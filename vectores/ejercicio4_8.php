<?php
/* Modificar un elemento específico de un array asociativo: Crea un array asociativo con los nombres de 4 países y sus capitales. Modifica la capital de uno de los países 
y muestra el array actualizado. */

$paises = array(
    "España" => "Madrid",
    "Italia" => "Roma",
    "Francia" => "París",
    "Rusia" => "Moscú",
);

$paises["Italia"] = "Venecia";

var_dump($paises);
?>