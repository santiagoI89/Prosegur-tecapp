<?php
require_once 'Conexion.php';
session_start();

if (isset($_POST['btnNEO'])) {
    // Guardar información del botón en la sesión
    $_SESSION['botonNEO'] = 'NEO';

    // Aquí debes guardar la información en tu base de datos
    // Puedes usar una conexión a la base de datos y una sentencia SQL para realizar esta tarea
    // Ejemplo:
    /*
    $conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
    $textoBoton = $_SESSION['boton'];
    $sql = "INSERT INTO tabla (nombre_boton) VALUES ('$textoBoton')";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Botón guardado en la base de datos correctamente.";
    } else {
        echo "Error al guardar el botón en la base de datos: " . $conexion->error;
    }
    
    $conexion->close();
    */
} else {
    echo "No se envió el formulario correctamente.";
}
?>