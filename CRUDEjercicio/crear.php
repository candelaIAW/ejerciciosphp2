<?php include('basededatos.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form method="POST" action="crear.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Apellido:</label>
        <input type="text" name="apellido" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <button type="submit">Crear</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "Usuario creado exitosamente.";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
    <br><a href="index.php">Volver</a>
</body>
</html>
