<?php
/* Escribe una función que calcule el IMC de una persona dado su peso y altura. 
La función debe devolver el IMC y la categoría correspondiente (bajo peso, peso normal, sobrepeso, obesidad).*/

function IMC($peso, $altura) {
    $imc = $peso/($altura*2);
        if ($imc < 18.5) {
            echo $categoria = "bajo peso.";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo $categoria = "Peso normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo $categoria = "Sobrepeso";
        } elseif ($imc >= 30) {
            echo $categoria = "Obesidad";
        }  

return ["IMC" => $imc, "Categoría" => $categoria];
}

$peso = 60;
$altura = 1.69;

echo "El IMC es: " . number_format($resultado["IMC"], 2) . "\n";
echo "Categoría: " . $resultado["Categoría"];
?>