<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body>

    <h1>Saludos en diferentes idiomas</h1>

    <h3>Selecciona un idioma:</h3>

    <form method="POST" action="">
        <button type="submit" name="Espanol">Español</button>
    </form>

    <form method="POST" action="">
        <button type="submit" name="Ingles">Inglés</button>
    </form>

    <form method="POST" action="">
        <button type="submit" name="Italiano">Italiano</button>
    </form>

    <form method="POST" action="">
        <button type="submit" name="Frances">Francés</button>
    </form>

    <form method="POST" action="">
        <button type="submit" name="Chino">Chino</button>
    </form>

    <a class="boton" href="bienvenida.php">
            bienvenida
        </a>

    <hr>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Espanol'])) {
        echo "<h2>¡Hola! Bienvenido.</h2>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Ingles'])) {
        echo "<h2>Hello! Welcome.</h2>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Italiano'])) {
        echo "<h2>Ciao! Benvenuto.</h2>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Frances'])) {
        echo "<h2>Bonjour! Bienvenue.</h2>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Chino'])) {
        echo "<h2>你好！欢迎！</h2>";
    }

    ?>

    <br>

</body>
</html>