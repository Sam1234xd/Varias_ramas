

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Título principal de la página -->
    <Center><h1>Bienvenido a mi página</h1>

    <?php

    // Guardamos los datos del alumno y la tarea en variables.
    $alumno = "Samantha Guzmán Contreras";
    $tarea = "Tarea 2.5: (individual) Página con varias ramas";
    $escuela = "CBTis 217";

    // Obtenemos la fecha actual.
    $fecha = date("d/m/Y");

    // Mostramos el mensaje de bienvenida con el nombre del alumno.
    echo "<h2>¡Bienvenido, $alumno!</h2>";

    // Mostramos el nombre del alumno.
    echo "<p><strong>Nombre del alumno:</strong> $alumno</p>";

    // Mostramos el nombre de la tarea.
    echo "<p><strong>Nombre de la tarea:</strong> $tarea</p>";

    // Mostramos la fecha.
    echo "<p><strong>Fecha:</strong> $fecha</p>";

    // Mostramos el nombre de la escuela.
    echo "<p><strong>Escuela:</strong> $escuela</p>";

    ?>

    <!-- Mostramos el logo de la escuela -->
    <h1>
        <img src="logo/images.jfif" class="icono">
    </h1>

    <!-- Creamos un enlace con apariencia de botón para ir a la página de saludos -->
    <a class="boton" href="saludos.php">
        Saludos
    </a>
</center>
</body>
</html>
