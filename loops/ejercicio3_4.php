<?php
$numero = rand(1, 50);
echo "La tabla de multiplicar de $numero es: <br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
?>