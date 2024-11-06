<?php
/* Borrar un elemento de un array asociativo: Crea un array asociativo con 4 marcas de autos y sus países de origen. Borra uno de los pares del array y muestra el array actualizado. */

$autos = array(
    "Citroen" => "Francia",
    "Opel" => "Alemania",
    "Hyundai" => "Corea del Sur",
    "Ferrari" => "Italia",
);

unset($autos["Hyundai"]);
foreach ($autos as $marca => $pais) {
    echo "Auto: $marca, País: $pais<br>";
}
?>