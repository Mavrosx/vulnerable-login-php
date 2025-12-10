<?php
// index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login vulnerable</title>
</head>
<body>
    <h1>Login super inseguro</h1>

    <form method="POST" action="login.php">
        <label>Usuario:</label><br>
        <input type="text" name="username"><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password"><br><<br>

        <button type="submit">Ingresar</button>
    </form>

    <hr>

    <?php
    // XSS reflejada: se imprime el parámetro sin escapar
    if (isset($_GET['msg'])) {
        echo "<p>Mensaje: " . $_GET['msg'] . "</p>";
    }
    ?>
</body>
</html>
<!-- Cambio de prueba HOLA GRUpara CI -->
