<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $botonValor = $_POST["boton_valor"];
    $_SESSION["boton_valor"] = $botonValor;
    echo "Valor almacenado en la sesión correctamente.";
}
?>