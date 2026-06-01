<?php
require_once "config/conexion.php";

class Usuario {
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::conectar();
    }

    public function obtenerTodos() {
        $stmt = $this->conexion->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);        
        return $resultado ?: [];
    }


     public function agregar($nombre, $email, $telefono, $direccion, $edad) {
          $stmt = $this->conexion->prepare("INSERT INTO usuarios (nombre, email, telefono, direccion, edad) VALUES (?, ?, ?, ?, ?)");
         return $stmt->execute([$nombre, $email, $telefono, $direccion, $edad]);
    }

    public function eliminar($id) {
        $stmt = $this->conexion->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $nombre, $email, $telefono, $direccion, $edad) {
        $stmt = $this->conexion->prepare("UPDATE usuarios SET nombre = ?, email = ?, telefono = ?, direccion = ?, edad = ? WHERE id = ?");
        return $stmt->execute([$nombre, $email, $telefono, $direccion, $edad, $id]);
    }
}
?>