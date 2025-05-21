<?php
$host = 'localhost';
$db = 'ev_docente';
$user = 'root';
$pass = '';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    echo 'Error de Conexión ' . $mysqli->connect_error;
    exit;
}
?>
