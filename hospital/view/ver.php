<?php
require_once "../modelo/hospital.php";
$formulario = TRUE;
$pacientes = [];

if (isset($_POST["procesar"])) {
    $formulario = FALSE;
    for ($i = 1; $i <= 4; $i++) {
        $p = new Hospital();
        $p->setCodigo($_POST["cod$i"]);
        $p->setNombre($_POST["nom$i"]);
        $p->setDiagnostico($_POST["diag$i"]);
        $p->setFecha($_POST["fec$i"]);
        $p->setGrave(isset($_POST["grave$i"]));
        $p->setTieneSeguro(isset($_POST["seg$i"]));
        $pacientes[] = $p;
    }
}
?>
<html>
<head><title>Hospital La Terminal</title>
    <link rel="stylesheet" type="text/css" href="../Style/estilos.css">
</head>
<body>
<h1>Registro de Pacientes - Hospital La Terminal</h1>

<?php if ($formulario) { ?>
    <form method="POST" action="ver.php">
        <table border="1">
            <tr>
                <th>N°</th><th>Código</th><th>Nombre y Apellido</th><th>Diagnóstico</th><th>Fecha</th><th>¿Es Grave?</th><th>¿Tiene Seguro?</th>
            </tr>
            <?php for($i=1; $i<=4; $i++): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><input type="text" name="cod<?php echo $i; ?>" required></td>
                <td><input type="text" name="nom<?php echo $i; ?>" required></td>
                <td><input type="text" name="diag<?php echo $i; ?>" required></td>
                <td><input type="date" name="fec<?php echo $i; ?>" required></td>
                <td><input type="checkbox" name="grave<?php echo $i; ?>"> Si</td>
                <td><input type="checkbox" name="seg<?php echo $i; ?>"> Si</td>
            </tr>
            <?php endfor; ?>
            <tr><td colspan="7" align="center"><input type="submit" name="procesar" value="Procesar Información"></td></tr>
        </table>
    </form>
<?php } else { ?>
    <h2>Información de Atención</h2>
    <?php foreach($pacientes as $p): ?>
        <fieldset>
            <legend>Paciente: <?php echo $p->getCodigo(); ?></legend>
            <p><b>Nombre:</b> <?php echo $p->getNombre(); ?></p>
            <p><b>Diagnóstico:</b> <?php echo $p->getDiagnostico(); ?></p>
            <p><b>Fecha de Atención:</b> <?php echo $p->getFecha(); ?></p>
            <p><b>Prioridad:</b> <?php echo $p->getGravedadTexto(); ?></p>
            <p><b>Seguro:</b> <?php echo $p->getAtencionSeguro(); ?></p>
        </fieldset><br>
    <?php endforeach; ?>
    <p><a href="ver.php">Registrar nuevos pacientes</a></p>
<?php } ?>
</body>
</html>