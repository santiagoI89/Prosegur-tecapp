<?php
require_once 'Conexion.php';

$searchText = ""; // Inicializamos la variable de búsqueda como vacía

// Verificamos si se ha enviado un valor desde el campo de búsqueda
if(isset($_POST['searchInput'])){
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
// Cargar datos de la tabla
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datas[] = $row;
    }
} else {// Definir el título como una cadena

    echo '<script>alert("Sin resultado");</script>';
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosegur tecapp</title>
    <link rel="stylesheet" href="css/css.css?v1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        /* Estilo para los encabezados de las tablas en negro */
        table thead th {
            background-color: black;
            color: black;
        }

        /* Estilo para el fondo de la tabla */
        table {
            background-color: white; /* Cambia el color de fondo según tu preferencia */
        }

        /* Estilo para las filas impares */
        table tbody tr:nth-child(odd) {
            background-color: black; 
            color: white;
            /* Cambia el color de fondo de las filas impares según tu preferencia */
        }
    </style>
</head>
<body class="fondos">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Prosegur tecapp</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ConsulatarProceso.php">Inicio</a>
                    </li>
                </ul>
            </div>
            <form method="POST" action="generar_pdf.php"> <!-- Puedes crear un archivo generar_pdf.php para generar el PDF -->
        <input type="hidden" name="searchInput" value="<?php echo $searchText; ?>">
        <button type="submit" class="btn btn-primary">Generar PDF</button>
        <a href="generar_excel.php?searchInput=<?php echo urlencode($searchText); ?>" class="btn btn-success">Generar Excel</a>
    </form>
            <form action="logout.php" method="post">
        <button class="btn btn-danger btnderecha" type="submit" value="Cerrar sesión">Cerrar sesión</button>
    </form>



        </div>
    </nav>


<h1 class="TNeo"><img src="imagenes/logo.png" alt="" width="180" height="60">CONSULTAS</h1>

<!-- Agregar un campo de búsqueda -->
<form method="POST" action="">
    <div class="container mt-3">
        <input type="text" id="searchInput" name="searchInput" class="form-control" placeholder="Buscar...">
    </div>
</form>

<!-- Agregar una tabla para mostrar los datos -->
<div class="container mt-3">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Contrato</th>
            <th>Usuario</th>
            <th>Panel</th>
            <th>Fecha</th>
            <th>Comentario</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Agregar filas de datos desde $datas
        foreach ($datas as $data) {
            echo "<tr>";
            echo "<td>" . $data['Contrato'] . "</td>";
            echo "<td>" . $data['Usuario'] . "</td>";
            echo "<td>" . $data['nombre_panel'] . "</td>";
            echo "<td>" . $data['fecha'] . "</td>";
            echo "<td>" . $data['Comentarios'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

</div>


<!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous">
<script src="ruta_a_sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>