<?php
/* Añadir elementos a un array numérico: Crea un array vacío. 
Añade cinco nombres de ciudades al array y muestra el array completo en pantalla. */

$ciudades = array();
array_push($ciudades, "Zaragoza", "Madrid", "Barcelona", "Valencia", "Salamanca");
foreach ($ciudades as $x) {
    echo "$x <br>";
}
?>

