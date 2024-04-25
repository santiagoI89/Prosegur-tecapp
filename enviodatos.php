<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST["usuario"];
    $apellido = $_POST["contrato"];
    
    // Conexión a la base de datos
    $mysqli = new mysqli("localhost", "root", "admin", "bdprosegur");
    
    // Verificar la conexión
    if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    }
    
    // Preparar la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO Ingreso(usuario,contrato) VALUES (?, ?)";
    
    // Preparar la sentencia
    if ($stmt = $mysqli->prepare($sql)) {
        // Vincular los parámetros
        $stmt->bind_param("ss", $nombre, $apellido);
        
        // Ejecutar la sentencia
        if ($stmt->execute()) {
            echo "Datos insertados correctamente en la tabla MySQL.";
        } else {
            echo "Error al insertar datos: " . $stmt->error;
        }
        
        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Error en la consulta: " . $mysqli->error;
    }
    
    // Cerrar la conexión
    $mysqli->close();
}
?>