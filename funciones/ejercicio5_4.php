<?php
function area_p($largo, $ancho):array{
    $area=$largo*$ancho;
    $perimetro=2*$largo+2*$ancho;
    return ["area"=> $area, "perimetro"=> $perimetro];

}

$resultado = area_p(10,14);
echo "El area vale {$resultado['area']}<br>";
echo "El perimetro vale {$resultado['perimetro']}<br>";

?>