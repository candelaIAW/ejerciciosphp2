<?php
function calcular(array $numeros): array {
    $cantidad=count($numeros);
    if ($cantidad==0){return ["promedio"=> null, "mediana" => null];}
    sort($numeros);
    if($cantidad%2==0){
        $mediana = ($numeros[$cantidad / 2 - 1] + $numeros[$cantidad / 2])/2;
    } else {
        $mediana = $numeros[floor($cantidad/2)];
    }

    $promedio=array_sum($numeros)/count($numeros);
    return ["promedio"=>$promedio, "mediana" => $mediana];
}