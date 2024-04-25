<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["usuarioAdmin"] = $_POST["usuarioAdmin"];
    $_SESSION["contraseñaAdmin"] = $_POST["contraseñaAdmin"];
    // Redirige al segundo formulario
    header("Location: ConsulatarProceso.php");
    exit;
}
?>
