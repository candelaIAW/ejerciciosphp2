
<?php
/* Crea un programa que simule un lanzamiento de un dado 10 veces. Lanzamiento debe mostrar el
número de lanzamiento, el valor del dado y la suma acumulada. */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
<?php
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $lanzamiento = rand(1,6);
    $suma += $lanzamiento;
    echo "Lanzamiento $i: Dado = $lanzamiento, Suma acumulada = $suma<br>";
}
?>
</body>
</html>