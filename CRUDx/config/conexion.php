<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $db = "test1";
        $user = "root";
        $pass = "";

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", 
            $user, $pass);
            return $pdo;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
?>