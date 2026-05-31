<?php
/* colocas los datos de base de datos*/
define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');
define('DB_PORT', 0000);

try {
    $conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
    $conexion->set_charset("utf8");
    
} catch (Exception $e) {
    die("Excepción: " . $e->getMessage());
}

function sanitize($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
