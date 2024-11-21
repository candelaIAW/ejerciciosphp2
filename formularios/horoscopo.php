<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fechaNacimiento = $_POST['fechaNacimiento'];

    // Validar que se ha enviado una fecha
    if (empty($fechaNacimiento)) {
        die("Por favor, selecciona una fecha de nacimiento.");
    }

    // Extraer el año de la fecha de nacimiento
    $año = (int) date("Y", strtotime($fechaNacimiento));

    // Determinar el horóscopo chino según el año
    $horoscopos = [
        "Rata" => ["image" => "../CRUD/rata.jpeg", "traits" => "Ingeniosa, versátil, encantadora."],
        "Buey" => ["image" => "../CRUD/buey.jpeg", "traits" => "Fuerte, confiable, diligente."],
        "Tigre" => ["image" => "../CRUD/tigre.jpeg", "traits" => "Valiente, competitivo, seguro de sí mismo."],
        "Conejo" => ["image" => "../CRUD/conejo.jpeg", "traits" => "Gentil, elegante, compasivo."],
        "Dragón" => ["image" => "../CRUD/dragon.jpeg", "traits" => "Energético, valiente, magnético."],
        "Serpiente" => ["image" => "../CRUD/serpiente.jpeg", "traits" => "Sabio, misterioso, intuitivo."],
        "Caballo" => ["image" => "../CRUD/caballo.jpeg", "traits" => "Activo, enérgico, sociable."],
        "Cabra" => ["image" => "../CRUD/cabra.jpeg", "traits" => "Creativo, amable, tranquilo."],
        "Mono" => ["image" => "../CRUD/mono.jpeg", "traits" => "Ingenioso, divertido, curioso."],
        "Gallo" => ["image" => "../CRUD/gallo.jpeg", "traits" => "Práctico, observador, perfeccionista."],
        "Perro" => ["image" => "../CRUD/perro.jpeg", "traits" => "Leal, honesto, protector."],
        "Cerdo" => ["image" => "../CRUD/cerdo.jpeg", "traits" => "Generoso, sincero, optimista."]
    ];

    $signos = array_keys($horoscopos);
    $indice = ($año - 4) % 12;
    $signo = $signos[$indice];

    $imagen = $horoscopos[$signo]['image'];
    $cualidades = $horoscopos[$signo]['traits'];
} else {
    die("Método de solicitud no válido.");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Horóscopo Chino</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .resultado {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        .resultado img {
            max-width: 100px;
            margin-bottom: 15px;
        }

        .resultado h1 {
            margin-bottom: 10px;
            font-size: 24px;
            color: #333;
        }

        .resultado p {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <img src="../CRUD">" <?php echo $imagen; ?>" alt="Horóscopo <?php echo $signo; ?>">
        <h1><?php echo $signo; ?></h1>
        <p><strong>Cualidades:</strong> <?php echo $cualidades; ?></p>
    </div>
</body>
</html>
