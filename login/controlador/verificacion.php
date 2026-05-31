<?php
class verificacion {
    private $VeriContra;

    public function __construct($conexion){
        require_once __DIR__ . '/../modelo/contrasena.php';
        $this->VeriContra = new contrasena($conexion);
    }

    public function login($username, $password) {
        if (empty($username) || empty($password)) {
            return ['success' => false, 'mensaje' => 'Usuario y contraseña requeridos'];
        }

        $usuario = $this->VeriContra->obtenerUsuario($username);

        if (!$usuario || $password !== $usuario['contrasena']) {
            return ['success' => false, 'mensaje' => 'Usuario o contraseña incorrectos'];
        }

        return ['success' => true, 'mensaje' => 'Sesión iniciada correctamente'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../conexion/conexion.php';

    $verificador = new verificacion($conexion);
    $resultado = $verificador->login($_POST['username'], $_POST['password']);

    if ($resultado['success']) {
        echo "<h2>¡Bienvenido, " . htmlspecialchars($_POST['username']) . "!</h2>";
    } else {
        echo "<h2>Error: " . $resultado['mensaje'] . "</h2>";
    }
}
?>