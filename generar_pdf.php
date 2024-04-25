<?php
require_once('libreria/fpdf.php');
require_once('Conexion.php');

$searchText = "";

if (isset($_POST['searchInput'])) {
    $searchText = $_POST['searchInput'];
}

$sql = "SELECT i.*, p.nombrePanel AS nombre_panel 
        FROM ingreso AS i
        LEFT JOIN panel_tbl AS p ON i.id_panel = p.id_panel
        WHERE i.Contrato LIKE '%$searchText%' 
        OR i.Usuario LIKE '%$searchText%' 
        OR p.nombrePanel LIKE '%$searchText%' 
        OR i.fecha LIKE '%$searchText%'";

$result = $conn->query($sql);
$datas = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datas[] = $row;
    }
} else {
    echo '<script>alert("Sin resultados");</script>';
}

// Crear una instancia de la clase FPDF con orientación horizontal
$pdf = new FPDF('L'); // 'L' para orientación horizontal
$pdf->AddPage();

// Configurar la fuente y el tamaño del texto
$pdf->SetFont('Arial', 'B', 16);

// Agregar un título
$pdf->Cell(0, 10, 'Informe de Busqueda en PDF', 0, 1, 'C');

// Agregar una tabla para mostrar los datos
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 10, 'Contrato', 1);
$pdf->Cell(30, 10, 'Usuario', 1);
$pdf->Cell(40, 10, 'Panel', 1);
$pdf->Cell(45, 10, 'Fecha', 1);
$pdf->MultiCell(90, 10, 'Comentario', 1);
$pdf->Ln(); // Nueva línea

// Agregar filas de datos desde $datas
$pdf->SetFont('Arial', '', 12);
foreach ($datas as $data) {
    $pdf->Cell(30, 10, $data['Contrato'], 1);
    $pdf->Cell(30, 10, $data['Usuario'], 1);
    $pdf->Cell(40, 10, $data['nombre_panel'], 1);
    $pdf->Cell(45, 10, $data['fecha'], 1);  
    $pdf->MultiCell(90, 10, utf8_decode($data['Comentarios']), 1);
    $pdf->Ln(); // Nueva línea
}

// Generar el PDF y descargarlo
$pdf->Output('informe.pdf', 'D');

$conn->close();
?>