<?php
/* Crea un programa en php con una variable $numero con un valor aleatoria entre
-10 y 10. El programa debe escribir un mensaje indicando si el número es positivo, negativo o cero.*/
$numero= rand(-10,10);
echo "el numero es $numero \n";
if ($numero>0){
    echo "El numero es positivo";
} elseif($numero==0){
    echo "El numero es cero";
} else{
    echo "El numero es negativo";
}
?>