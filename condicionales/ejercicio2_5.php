<?php

//Definimos la variable booleana y la temperatura
$lluvia = false;
$temperatura = 25;
//Comprobamos la temperatura y el estado de la lluvia
if ($temperatura < -10 || $temperatura > 40) {
    echo "La temperatura es $temperatura y es una temperatura extrema. No se puede realizar la actividad";
} elseif (!$lluvia) {
    if ($temperatura > 20) {
        echo "La temperatura es $temperatura y no llueve. A la playa."; 
    } elseif ($temperatura >= -10 && $temperatura <= 5) {
        echo "La temperatura es $temperatura y no llueve. A esquiar";
    } elseif ($temperatura > 5 && $temperatura <= 20) {
        echo "La temperatura es $temperatura y no llueve. De paseo";
    }   
}   else {
        echo "Hoy llueve y debes quedarte en casa.";
}
?>