<?php
function descuento(float $precio, float $descuento):float{
    return ($precio*(1-$descuento/100));
}

$precio=120;
$descuento=20;
echo "precio= $precio descuento= $descuento % precio rebajado= ". descuento($precio, $descuento);
?>