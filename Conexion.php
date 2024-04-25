<?php
$servername = "localhost"; // Cambia esto si tu base de datos no está en localhost
$username = "root";
$password = "";#
$database = "bdprosegur";
// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8"); // Establecer la codificación a UTF-8

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
?>