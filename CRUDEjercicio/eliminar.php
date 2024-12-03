<?php
include('basededatos.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado exitosamente.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
