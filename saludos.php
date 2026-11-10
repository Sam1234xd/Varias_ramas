
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Título principal de la página -->
    <h1>Saludos en diferentes idiomas</h1>

    <!-- Indicamos al usuario que seleccione un idioma -->
    <h3>Selecciona un idioma:</h3>

    <!-- Creamos un formulario con un botón para el idioma español -->
    <form method="POST" action="">
        <button type="submit" name="Espanol">Español</button>
    </form>

    <!-- Creamos un formulario con un botón para el idioma inglés -->
    <form method="POST" action="">
        <button type="submit" name="Ingles">Inglés</button>
    </form>

    <!-- Creamos un formulario con un botón para el idioma italiano -->
    <form method="POST" action="">
        <button type="submit" name="Italiano">Italiano</button>
    </form>

    <!-- Creamos un formulario con un botón para el idioma francés -->
    <form method="POST" action="">
        <button type="submit" name="Frances">Francés</button>
    </form>

    <!-- Creamos un formulario con un botón para el idioma chino -->
    <form method="POST" action="">
        <button type="submit" name="Chino">Chino</button>
    </form>

    <!-- Creamos un enlace para regresar a la página de bienvenida -->
    <a class="boton" href="bienvenida.php">
        Bienvenida
    </a>

    <!-- Agregamos una línea para separar el contenido -->
    <hr>

    <?php

    // Comprobamos si se presionó el botón de español.
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Espanol'])) {
        echo "<h2>¡Hola! Bienvenido.</h2>";
    }

    // Comprobamos si se presionó el botón de inglés.
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Ingles'])) {
        echo "<h2>Hello! Welcome.</h2>";
    }

    // Comprobamos si se presionó el botón de italiano.
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Italiano'])) {
        echo "<h2>Ciao! Benvenuto.</h2>";
    }

    // Comprobamos si se presionó el botón de francés.
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Frances'])) {
        echo "<h2>Bonjour! Bienvenue.</h2>";
    }

    // Comprobamos si se presionó el botón de chino.
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Chino'])) {
        echo "<h2>你好！欢迎！</h2>";
    }

    ?>

    <br>

</body>
</html>
