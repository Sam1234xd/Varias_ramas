

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body>

    <h1>Bienvenido a mi página</h1>

    <?php

    $alumno = "Samantha Guzmán Contreras";
    $tarea = "Tarea 2.5: (individual)  Página con varias ramas";
    $escuela = "CBTis 217";
    $fecha = date("09/11/2026");

    echo "<h2>¡Bienvenido, $alumno!</h2>";

    echo "<p><strong>Nombre del alumno:</strong> $alumno</p>";

    echo "<p><strong>Nombre de la tarea:</strong> $tarea</p>";

    echo "<p><strong>Fecha:</strong> $fecha</p>";

    echo "<p><strong>Escuela:</strong> $escuela</p>";

    ?>

     <h1>
        <img src="logo/images.jfif" class="icono">
    </h1>

    <a class="boton" href="saludos.php">
            Saludos
        </a>

</body>
</html>
