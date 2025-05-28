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
//$idPrograma = $mysqli->real_escape_string($_POST['id_programa']);

$idCiclo = $mysqli->real_escape_string($_POST['id_ciclo']);

//$idPrograma = $mysqli->real_escape_string($_POST['id_programa']);

// $sql = $mysqli->query("SELECT t_curso.id, t_curso.curso  FROM t_curso
// INNER JOIN t_programa ON t_curso.id_ciclo = t_programa.id
// where t_curso.id_ciclo = $idCiclo AND t_programa.id = $idPrograma");

$sql = $mysqli->query("SELECT id, curso FROM t_curso where id_ciclo = $idCiclo");
$respuesta = "<option value=''>Seleccionar </option>";

//---Failed query---
// $sql = $mysqli->query("SELECT c.id, c.curso 
// FROM t_curso c
// INNER JOIN program p ON c.id_ciclo  = p.id
// where c.id_ciclo = 1 ");

// $respuesta = "<option value='0'>Seleccionar aaa</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['curso'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);