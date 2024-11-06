<?php

/* Ordenar un array numérico. Crea un array con los nombres de 7 deportes.
    Ordena el array alfabéticamente y muestra el array ordenado. */

$deportes = array("Tenis", "Natación", "Baloncesto", "Futbol", "Pádel", );
asort($deportes);
var_dump($deportes);
?>