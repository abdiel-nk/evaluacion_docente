
<?php
$mysqli = new mysqli('localhost', 'root', '', 'ev_docente');

if ($mysqli->connect_error) {
    echo 'Error de Conexión ' . $mysqli->connect_error;
    exit;
}
?>
