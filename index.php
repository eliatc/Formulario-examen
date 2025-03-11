<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="styles.css">
    <h2>Formulario de Contacto</h2>
</head>
<body>
   
    <form id="contactForm" action="enviar.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="nombre" name="telefono" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="asunto">Asunto:</label><br>
        <textarea id="asunto" name="asunto" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>

    <script src="validacion.js"></script>
</body>
</html>