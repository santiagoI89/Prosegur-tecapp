<?php
require_once '../Conexion.php';

$sql = "SELECT * FROM panel_tbl";

$result= $conn->query($sql);

$datas = array('data' => array());

//Cargar datos de la tabla
if($result -> num_rows>0){
    while($row=$result->fetch_array()){
        $datas['data'][]=array($row[0],$row[1]);
    }
}else{
    echo "Error";
}

$conn->close();

echo json_encode($datas);

?>