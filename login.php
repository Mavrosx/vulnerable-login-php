<?php
// login.php
include 'db.php';

// Tomar los datos del formulario (sin validación)
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// CONSULTA 100% VULNERABLE A SQL INJECTION
// Se concatenan directamente los valores del usuario
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<h2>Bienvenido, " . $username . "</h2>";
} else {
    echo "<h2>Credenciales inválidas</h2>";
    // Exposición de información sensible (mala práctica)
    echo "<p>Consulta ejecutada: $sql</p>";
}
?>
