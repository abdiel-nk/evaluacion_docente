<?php 
require 'conexion.php';

/*$idPrograma =  $mysqli->real_escape_string($_POST['id_programa']);
$sql = "SELECT id, ciclo FROM t_ciclo WHERE id_programa = $idPrograma";
$resultado = $mysqli->query($sql);
$respuesta = "<option value=''> Seleccionar </option>";

while($row = $resultado->fetch_assoc()){
    $respuesta .= "<option value '" . $row['id'] ."'> " . $row['ciclo'] . " </option>";
}
echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
*/


$idPrograma = $mysqli->real_escape_string($_POST['id_programa']);
$sql = $mysqli->query("SELECT id, ciclo FROM t_ciclo WHERE id_programa= $idPrograma");

$respuesta = "<option value=''>Seleccionar asasdad</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['ciclo'] . "</option>";
}
echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
