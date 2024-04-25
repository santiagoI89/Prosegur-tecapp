<?php

require_once '../Conexion.php';

$val['success']=array('success' =>false, 'mess'=>"");


if($_POST){
    
    $consult_panel = $_POST["id_Panel"];
    $consult_contrato = $_POST["Contrato"];
    $consult_usuario = $_POST["Usuario"];
    $consult_comentarios = $_POST["Comentarios"];
    $consult_fecha = $_POST["fecha"];

    $sql = "INSERT INTO ingreso(Contrato, Usuario, id_Panel, fecha, Comentarios) VALUES('$consult_contrato','$consult_usuario','$consult_panel', now(),'$consult_comentarios')";
    $result = $conn->query($sql);

    if($result === true){
        $val['success']=true;
        $val['mess']="Se registro correctamente";
    }
    else{

        $val['success']=false;
        $val['mess']="Error en el registro";

    }
}
else{

    $val['success']=false;
    $val['mess']="No se realizo registro";

}

echo json_encode($val);

?>