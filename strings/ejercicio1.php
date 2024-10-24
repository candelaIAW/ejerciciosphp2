<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
$n1 = htmlspecialchars($_POST['n1']);
$n2 = htmlspecialchars($_POST['n2']);
#Muestra un nombre de bienvenida "Bienvenido, nombre apellido"
echo "Bienvenido/a, " . $nombre ." ". $apellido ." <br>";
#Escribe el nombre y el apellido al revés.
echo "Tu nombre al revés es: " . strrev($nombre ." ". $apellido) ." <br>";
#Cuenta las letras del nombre, del apellido y las totales.
echo "Tu nombre tiene: " . strlen($nombre) ." letras <br>";
echo "Tu apellido tiene: " . strlen(string: $apellido) ." letras <br>";
echo "Tu nombre y tu apellido tienen: " . strlen($nombre ." ". $apellido) ." letras <br>";
#Escribe el nombre y el apellido en mayúsculas.
echo "Tu nombre y apellido en mayúsculas es: " . strtoupper($nombre ." ". $apellido) ." <br>";
#Imprimir el primer y último carácter del nombre y apellido.
echo "El primer carácter de tu nombre es: " . substr($nombre, 0, 1) ." y el último es : " . substr($nombre, -1) . " <br>";
echo "El primer carácter de tu apellido es: " . substr($apellido, 0, 1) ." y el último es : " . substr($apellido, -1) . " <br>";
#Cambiar todas las vocales por u.
echo "Así es tu nombre con la u: " . str_replace(["a","e","i","o"], "u", $nombre). " <br>";
echo "Y tu apellido con la u es: " . str_replace(["a","e","i","o"], "u", $apellido). " <br>";
}
#Añade al formulario tres campos para introducir dos números. El programa procesar debe mostrar la suma de los números, la diferencia, el cociente y el producto.
#Realiza las operaciones matemáticas
$suma = $n1 + $n2;
$diferencia = $n1 - $n2;
$producto = $n1 * $n2;
$division = ($n2 != 0) ? $n1 / $n2 : $n1;
#Muestra resultados de las operaciones.
echo " Resultado: <br> ";
echo " La suma es: $suma <br> ";
echo " La diferencia es: $diferencia <br> ";
echo " El producto es: $producto <br> ";
echo " La division es: $division <br> ";
?>