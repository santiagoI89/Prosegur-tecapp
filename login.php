<?php
require_once 'Conexion.php';


$nombre = $_POST["usuarioAdmin"];
$pass = $_POST["contraseñaAdmin"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and contrasena = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: ConsulatarProceso.php");
	echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{ 
	echo "<script> alert('Usuario y contraseña incorrecta o no coinciden');window.location= 'index.php' </script>";
}
	


?>
