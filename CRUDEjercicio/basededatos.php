<?php
$servername = "localhost";
$username = "phpmyadmin";  
$password = "changeme";     
$database = "prueba";  

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
