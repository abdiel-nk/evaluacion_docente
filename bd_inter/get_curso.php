<?php 
require 'conexion.php';

/*
$idCiclo =  $mysqli->real_escape_string($_POST['id_ciclo']);

$sql = "SELECT id, curso FROM t_curso WHERE id_ciclo = $idCiclo";
$resultado = $mysqli->query($sql);

$respuesta = "<option value='0'>Seleccionar</option>";
 console.log($respuesta);

while($row = $resultado->fetch_assoc()){
    $respuesta .= "<option value '" . $row['id'] ."'> " . $row['curso'] . " </option>";
    

}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); */

/*$idCiclo = $mysqli->real_escape_string($_POST['id_ciclo'] ?? 0 );
$sql = $mysqli->query("SELECT id, curso FROM t_curso WHERE id_ciclo=$idCiclo");

$respuesta = "<option value='0'>Seleccionar</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['curso'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);*/

$idCiclo = $mysqli->real_escape_string($_POST['id_ciclo']);

$sql = $mysqli->query("SELECT id, curso FROM t_curso WHERE id_ciclo=$idCiclo");

$respuesta = "<option value='0'>Seleccionar</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['curso'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);