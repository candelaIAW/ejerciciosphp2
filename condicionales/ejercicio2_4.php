<?php
//Generamos un número aleatorio entre 1 y 7
$dia = rand(1,7);
//Muestra el número aleatorio
echo "El número aleatorio es: $dia<br>";
//Relacionamos los días de la semana correspondientes
switch ($dia) {
    case 1:
        $dia = "Lunes";
        break;
    case 2:
        $dia = "Martes";
        break;
    case 3:
        $dia = "Miércoles";
        break;
    case 4:
        $dia = "Jueves";
        break;
    case 5:
        $dia = "Viernes";
        break;
    case 6:
        $dia = "Sábado";
        break;
    case 7:
        $dia = "Domingo";
        break;
    default:
        echo "Número fuera de rango";
        break;
}
//Mostramos el día de la semana resultante
echo "Día de la semana: $dia";
?>
    