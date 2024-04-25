<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["contrato"] = $_POST["contrato"];
    $_SESSION["username"] = $_POST["username"];
    // Redirige al segundo formulario
    header("Location: paneles.php");
    exit;
}
?>
