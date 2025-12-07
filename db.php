<?php
// db.php
// Conexión MUY insegura a la base de datos (credenciales en texto plano)

$host = "localhost";
$user = "root";       // Usuario por defecto (mala práctica)
$pass = "";           // Password vacío (mala práctica)
$db   = "vuln_app";   // Nombre de la base de datos

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
