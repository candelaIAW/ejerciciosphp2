<?php
#CANDELA PEJ ARROYO
#24/10/24
#Ejercicio 1
$numero= rand(-10,10);
echo "el numero vale $numero \n";
if ($numero>0){
    echo "El numero es positivo";
} elseif($numero==0){
    echo "El numero es cero";
} else{
    echo "El numero es negativo";
}
?>