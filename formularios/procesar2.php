<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="procesar2.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" required></textarea>
        
        <label for="opcion">Selecciona una opción:</label>
        <select id="opcion" name="opcion" required>
            <option value="">Selecciona una opción</option>
            <option value="opcion1">Opción 1</option>
            <option value="opcion2">Opción 2</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
