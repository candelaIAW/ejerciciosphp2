<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $comentario = $_POST['comentario'] ?? '';
    $opcion = $_POST['opcion'] ?? '';

    $errores = [];

    // Validar el nombre (solo letras y espacios, entre 2 y 50 caracteres)
    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}$/", $nombre)) {
        $errores[] = "El campo 'Nombre' no es válido. Debe contener solo letras y espacios.";
    }

    // Validar el email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El campo 'Email' no es válido.";
    }

    // Validar el comentario (mínimo 10 caracteres)
    if (strlen(trim($comentario)) < 10) {
        $errores[] = "El campo 'Comentario' debe tener al menos 10 caracteres.";
    }

    // Validar que se ha seleccionado una opción
    if (empty($opcion)) {
        $errores[] = "Debe seleccionar una opción.";
    }

    // Mostrar errores o procesar los datos
    if (!empty($errores)) {
        echo "<h3>Errores encontrados:</h3><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Datos recibidos correctamente:</h3>";
        echo "Nombre: $nombre<br>";
        echo "Email: $email<br>";
        echo "Comentario: $comentario<br>";
        echo "Opción seleccionada: $opcion<br>";
        // Aquí puedes realizar otras acciones, como guardar en la base de datos
    }
}
?>
