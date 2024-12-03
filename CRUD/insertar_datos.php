<?php
// Configuración de la base de datos
$host = "localhost"; // Cambiar si es necesario
$user = "phpmyadmin"; // Cambiar por tu usuario de MySQL
$password = "changeme"; // Cambiar por tu contraseña de MySQL
$dbname = "formulario_db"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];

    // Validar campos (opcional)
    if (empty($nombre) || empty($apellidos) || empty($email)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Preparar la consulta SQL
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellidos, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $apellidos, $email);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro insertado exitosamente.";
    } else {
        echo "Error al insertar el registro: " . $stmt->error;
    }

    // Cerrar la consulta y conexión
    $stmt->close();
    $conn->close();
}
?>
