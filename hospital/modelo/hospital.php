<?php
class Hospital {
    private $codigo;
    private $nombre;
    private $diagnostico;
    private $fecha;
    private $grave;
    private $tieneSeguro;

    // Metodos Set
    public function setCodigo($codigo) { $this->codigo = $codigo; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setDiagnostico($diagnostico) { $this->diagnostico = $diagnostico; }
    public function setFecha($fecha) { $this->fecha = $fecha; }
    public function setGrave($grave) { $this->grave = $grave; }
    public function setTieneSeguro($seguro) { $this->tieneSeguro = $seguro; }

    // Metodos Get
    public function getCodigo() { return $this->codigo; }
    public function getNombre() { return $this->nombre; }
    public function getDiagnostico() { return $this->diagnostico; }
    public function getFecha() { return $this->fecha; }
    
    public function getGravedadTexto() {
        if ($this->grave) {
            return "ESTADO GRAVE: Atender por Emergencia e Internarlo.";
        } else {
            return "Estado no tan grave: Atender en Medicina General.";
        }
    }

    public function getAtencionSeguro() {
        if ($this->tieneSeguro) {
            return "Cuenta con seguro: SERÁ ATENDIDO.";
        } else {
            return "No tiene seguro: VUELVA PRONTO.";
        }
    }
}
?>