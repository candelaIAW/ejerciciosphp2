<?php
/* Crea un programa en php que genere un numero aleatorio entre 1 y 7.
El programa debe mostrar el numero y el día de la semana siendo el lunes el día 1 y el domingo el día 7. */
//Generamos un número aleatorio entre 1 y 7
$dia = rand(1,7);
echo "El número aleatorio es: $dia<br>";
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
echo "Día de la semana: $dia";
?>
    