<?php
/* Recorrer un array asociativo: Crea un array asociativo vacío. Añadre tres pares 
de clave-valor (nombre de país y capital) al array y muestra el array completo */

$personas = array("Juan" => 25, "Ana" => 30, "Pedro" => 22, "Maria" => 28, "Carlos" => 35);
foreach ($personas as $nombre => $edad) {
    echo "Nombre: $nombre, Edad: $edad<br>";
}
?>