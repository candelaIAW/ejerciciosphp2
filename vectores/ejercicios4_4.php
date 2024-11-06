<?php
/* Borrar un elemento específico de un array numérico: Crea un array con los nombres de 5 colores. 
Borra el segundo color del array y muestra el array actualizado. */

$colores = array("Rojo", "Amarillo", "Azul", "Verde", "Naranja");
array_splice($colores, 1, 1);
var_dump($colores)

?>