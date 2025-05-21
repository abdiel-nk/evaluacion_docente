<?php 
require 'conexion.php';

$idCiclo = $mysqli->real_escape_string($_POST['id_ciclo']);

$sql = "SELECT id, curso FROM t_curso WHERE id_ciclo = $idCiclo";
$resultado = $mysqli->query($sql);

$respuesta = "<option value=''> Seleccionar </option>";


while ($row = $resultado->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['curso'] . "
    </option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

