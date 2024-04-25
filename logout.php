<?php
session_start();
session_destroy();

// Evitar el caché en el navegador
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Redirigir al usuario a una página de inicio de sesión u otra página después de cerrar sesión
header("Location: index.php");
exit;
?>