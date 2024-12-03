<?php
/*Al darle a editar, el asistente te pide un nuevo nombre, un nuevo apellido y/o un nuevo correo
si no se quiere modificar todo, solo hay que dar a siguiente*/
include('basededatos.php');
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Usuario actualizado.";
    } else {
        echo "Error: " . $conn->error;
    }
}
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form method="POST" action="">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
    <br><a href="index.php">Volver</a>
</body>
</html>
