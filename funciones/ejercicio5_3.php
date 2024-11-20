<?php
function cambiarTemp($valor, $escala)
{
    if ($escala == "C") {
        $resultado = $valor * 9 / 5 + 32;
        $nuevaEscala = "F";
    } elseif ($escala == "F") {
        $resultado = ($valor - 32) * 5 / 9;
        $nuevaEscala = "C";
    } else {
        return "Escala no válida. Usa 'C' para Celsius o 'F' para Fahrenheit.";
    }

    return "$valor grados $escala son $resultado grados $nuevaEscala.";
}

echo cambiarTemp(20, "C"). "<br>";
echo cambiarTemp(80, "F"). "<br>";

?>