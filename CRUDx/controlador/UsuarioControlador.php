<?php
require_once "modelo/Usuario.php";
//require_once "vista/formulario.php";
//require_once "vista/lista.php";

class UsuarioControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new Usuario();
    }

    public function manejar() {
        $action = $_GET['action'] ?? 'listar';

        switch ($action) {
            case 'agregar':
                if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['direccion'])&& !empty($_POST['edad'])) {
                    $this->modelo->agregar($_POST['nombre'], $_POST['email'], $_POST['telefono'], $_POST['direccion'],$_POST['edad']);
                }
                header("Location: index.php");
                break;

            case 'eliminar':
                if (!empty($_GET['id'])) {
                    $this->modelo->eliminar($_GET['id']);
                }
                header("Location: index.php");
                break;

            case 'editar':
                if (!empty($_GET['id'])) {
                    $usuario = $this->modelo->obtenerPorId($_GET['id']);
                    include "vista/formulario.php";
                }
                break;

            case 'actualizar':
                if (!empty($_GET['id']) && !empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['edad'])) {
                    $this->modelo->actualizar($_GET['id'], $_POST['nombre'], $_POST['email'], $_POST['telefono'], $_POST['direccion'], $_POST['edad']);
                }
                header("Location: index.php");
                break;

            case 'nuevo':
                include "vista/formulario.php";
                break;

            default:                
                $usuarios = $this->modelo->obtenerTodos();
                //var_dump($usuarios); // luego elimínalo
                include "vista/lista.php";
                
        }
    }
}
?>

