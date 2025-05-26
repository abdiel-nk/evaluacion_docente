
<?php
$mysqli = new mysqli('localhost', 'root', '', 'ev_docente');

if ($mysqli->connect_error) {
    echo 'Error de Conexión ' . $mysqli->connect_error;
    exit;
}


// <?php
// $host = 'localhost';
// $db = 'ev_docente';
// $user = 'root';
// $pass = '';

// $mysqli = new mysqli($host, $user, $pass, $db);

// $mysqli->setAttribute(mysqli::ATTR_ERRMODE, mysqli::ERRMODE_EXCEPTION);
// $mysqli->setAttribute(mysqli::ATTR_DEFAULT_FETCH_MODE, mysqli::FETCH_ASSOC);
// if ($mysqli->connect_error) {
//     echo 'Error de Conexión ' . $mysqli->connect_error;
//     exit;

// }
// ?>
