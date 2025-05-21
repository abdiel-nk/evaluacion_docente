<?php 
require 'conexion.php';


$idPrograma =  $mysqli->real_escape_string($_POST['id_programa']);

$sql = "SELECT id, ciclo FROM t_ciclo WHERE id_programa = $idPrograma ORDER BY ciclo ASC";
$resultado = $mysqli->query($sql);

$respuesta = "<option value=''> Seleccionar </option>";


while($row = $resultado->fetch_assoc()){
    $respuesta .= "<option value '" .$row['id'] ."'> " . $row['ciclo'] . " </option>";

}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);


