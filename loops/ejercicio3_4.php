<?php
/* Crea un programa con un una variable aleatoria entre 1 y 50 y escriba la tabla
de multiplicar de dicho número. */
$numero = rand(1, 50);
echo "La tabla de multiplicar de $numero es: <br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
?>