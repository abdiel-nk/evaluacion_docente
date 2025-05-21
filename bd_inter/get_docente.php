<?php 
require 'conexion.php';


$idCurso =  $mysqli->real_escape_string($_POST['id_curso']);

$sql = "SELECT id, docente FROM t_docente WHERE id_curso = $idCurso ORDER BY docente ASC";
$resultado = $mysqli->query($sql);

$respuesta = "<option value=''> Seleccionar </option>";


while($row = $resultado->fetch_assoc()){
    $respuesta .= "<option value '" . $row['id'] ."'> " . $row['docente'] . " </option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);


