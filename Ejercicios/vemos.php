<?php
require_once "hospital.php";
$formulario = TRUE;

if (isset($_POST["procesar"])) {
    $formulario = FALSE;
    
    // Paciente 1
    $p1 = new Hospital();
    $p1->setCodigo($_POST["cod1"]);
    $p1->setNombre($_POST["nom1"]);
    $p1->setDiagnostico($_POST["diag1"]);
    $p1->setFecha($_POST["fec1"]);
    $p1->setGrave($_POST["grave1"]);
    $p1->setSeguro($_POST["seg1"]);

    // Paciente 2
    $p2 = new Hospital();
    $p2->setCodigo($_POST["cod2"]);
    $p2->setNombre($_POST["nom2"]);
    $p2->setDiagnostico($_POST["diag2"]);
    $p2->setFecha($_POST["fec2"]);
    $p2->setGrave($_POST["grave2"]);
    $p2->setSeguro($_POST["seg2"]);

    // Paciente 3
    $p3 = new Hospital();
    $p3->setCodigo($_POST["cod3"]);
    $p3->setNombre($_POST["nom3"]);
    $p3->setDiagnostico($_POST["diag3"]);
    $p3->setFecha($_POST["fec3"]);
    $p3->setGrave($_POST["grave3"]);
    $p3->setSeguro($_POST["seg3"]);

    // Paciente 4
    $p4 = new Hospital();
    $p4->setCodigo($_POST["cod4"]);
    $p4->setNombre($_POST["nom4"]);
    $p4->setDiagnostico($_POST["diag4"]);
    $p4->setFecha($_POST["fec4"]);
    $p4->setGrave($_POST["grave4"]);
    $p4->setSeguro($_POST["seg4"]);
}
?>
<html>
<head><title>HOSPITAL LA TERMINAL</title></head>
<body>
<h1>Registro de Pacientes</h1>
<?php if($formulario) { ?>
<form method="POST" action="vemos.php">
    <h3>Datos Paciente 1</h3>
    Código: <input type="text" name="cod1"><br>
    Nombre: <input type="text" name="nom1"><br>
    Diagnóstico: <input type="text" name="diag1"><br>
    Fecha (DD/MM/AAAA): <input type="text" name="fec1"><br>
    ¿Grave? (SI/NO): <input type="text" name="grave1"><br>
    ¿Seguro? (SI/NO): <input type="text" name="seg1"><hr>

    <h3>Datos Paciente 2</h3>
    Código: <input type="text" name="cod2"><br>
    Nombre: <input type="text" name="nom2"><br>
    Diagnóstico: <input type="text" name="diag2"><br>
    Fecha (DD/MM/AAAA): <input type="text" name="fec2"><br>
    ¿Grave? (SI/NO): <input type="text" name="grave2"><br>
    ¿Seguro? (SI/NO): <input type="text" name="seg2"><hr>

    <h3>Datos Paciente 3</h3>
    Código: <input type="text" name="cod3"><br>
    Nombre: <input type="text" name="nom3"><br>
    Diagnóstico: <input type="text" name="diag3"><br>
    Fecha (DD/MM/AAAA): <input type="text" name="fec3"><br>
    ¿Grave? (SI/NO): <input type="text" name="grave3"><br>
    ¿Seguro? (SI/NO): <input type="text" name="seg3"><hr>

    <h3>Datos Paciente 4</h3>
    Código: <input type="text" name="cod4"><br>
    Nombre: <input type="text" name="nom4"><br>
    Diagnóstico: <input type="text" name="diag4"><br>
    Fecha (DD/MM/AAAA): <input type="text" name="fec4"><br>
    ¿Grave? (SI/NO): <input type="text" name="grave4"><br>
    ¿Seguro? (SI/NO): <input type="text" name="seg4"><br>

    <input type="submit" name="procesar" value="PROCESAR PACIENTES">
</form>
<?php } else { ?>
    <h2>Resultados de Atención</h2>
    
    <fieldset>
        <legend>Paciente 1: <?php echo $p1->getNombre(); ?></legend>
        <p>Diagnóstico: <?php echo $p1->getDiagnostico(); ?></p>
        <p>Fecha: <?php echo $p1->getFecha(); ?></p>
        <p><b>Acción:</b> <?php echo $p1->getGravedad(); ?></p>
        <p><b>Seguro:</b> <?php echo $p1->getAtencionSeguro(); ?></p>
    </fieldset>

    <fieldset>
        <legend>Paciente 2: <?php echo $p2->getNombre(); ?></legend>
        <p>Diagnóstico: <?php echo $p2->getDiagnostico(); ?></p>
        <p>Fecha: <?php echo $p2->getFecha(); ?></p>
        <p><b>Acción:</b> <?php echo $p2->getGravedad(); ?></p>
        <p><b>Seguro:</b> <?php echo $p2->getAtencionSeguro(); ?></p>
    </fieldset>

    <fieldset>
        <legend>Paciente 3: <?php echo $p3->getNombre(); ?></legend>
        <p>Diagnóstico: <?php echo $p3->getDiagnostico(); ?></p>
        <p>Fecha: <?php echo $p3->getFecha(); ?></p>
        <p><b>Acción:</b> <?php echo $p3->getGravedad(); ?></p>
        <p><b>Seguro:</b> <?php echo $p3->getAtencionSeguro(); ?></p>
    </fieldset>

    <fieldset>
        <legend>Paciente 4: <?php echo $p4->getNombre(); ?></legend>
        <p>Diagnóstico: <?php echo $p4->getDiagnostico(); ?></p>
        <p>Fecha: <?php echo $p4->getFecha(); ?></p>
        <p><b>Acción:</b> <?php echo $p4->getGravedad(); ?></p>
        <p><b>Seguro:</b> <?php echo $p4->getAtencionSeguro(); ?></p>
    </fieldset>

    <p><a href="vemos.php">Volver a registrar</a></p>
<?php } ?>
</body>
</html>