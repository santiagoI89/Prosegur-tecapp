<?php
require_once 'Conexion.php';

$searchText = isset($_GET['searchInput']) ? $_GET['searchInput'] : "";

$sql = "SELECT i.*, p.nombrePanel AS nombre_panel 
        FROM ingreso AS i
        LEFT JOIN panel_tbl AS p ON i.id_panel = p.id_panel
        WHERE i.Contrato LIKE '%$searchText%' 
        OR i.Usuario LIKE '%$searchText%' 
        OR p.nombrePanel LIKE '%$searchText%' 
        OR i.fecha LIKE '%$searchText'";

$result = $conn->query($sql);
$datas = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datas[] = $row;
    }
}

// Crear un archivo CSV con punto y coma como delimitador
$csvFileName = "consulta.csv"; // Nombre del archivo CSV
$csvFile = fopen($csvFileName, 'w');

// Configurar la codificación UTF-8
fprintf($csvFile, chr(0xEF).chr(0xBB).chr(0xBF)); // BOM UTF-8

// Encabezados de columna
fputcsv($csvFile, array('Contrato', 'Usuario', 'Panel', 'Fecha', 'Comentario'), ';'); // Usa punto y coma como delimitador

// Llenar el archivo CSV con datos utilizando punto y coma como delimitador
foreach ($datas as $data) {
    fputcsv($csvFile, array($data['Contrato'], $data['Usuario'], $data['nombre_panel'], $data['fecha'], $data['Comentarios']), ';'); // Usa punto y coma como delimitador
}

fclose($csvFile);

// Configurar el encabezado para descargar como un archivo CSV
header('Content-Type: application/csv; charset=UTF-8');
header('Content-Disposition: attachment;filename="' . $csvFileName . '"');
readfile($csvFileName);

// Borrar el archivo CSV después de descargar
unlink($csvFileName);

$conn->close();
?>