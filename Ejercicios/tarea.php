<?php
class Empleado {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo "Creando el objeto Empleado: {$this->nombre}<br>";
    }

    public function __destruct() {
        echo "Destruyendo el objeto Empleado: {$this->nombre}<br>";
    }

    public function mostrarNombre() {
        echo "Nombre del empleado: {$this->nombre}<br>";
    }
}
$empleado1 = new Empleado("Ana");
$empleado1->mostrarNombre();
?>
