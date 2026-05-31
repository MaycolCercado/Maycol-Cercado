<?php
class contrasena {
    private $conexion;
    private $tabla = 'usuarios';

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }
    public function obtenerUsuario($username){
        $query = "SELECT * FROM " . $this->tabla . " WHERE username = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>
