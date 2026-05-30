<?php
$log = [];
$pesoActual = 0;
$cajasCargadas = 0;
$limite = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limite = (int)$_POST["limite"];
    
    while ($pesoActual < $limite) {
        $pesoNuevaCaja = rand(10, 30); 
        
        if (($pesoActual + $pesoNuevaCaja) > $limite) {
            $log[] = "Caja de $pesoNuevaCaja kg rechazada (Superaría el límite).";
            break; 
        }
        
        $pesoActual += $pesoNuevaCaja;
        $cajasCargadas++;
        $log[] = "Caja #$cajasCargadas de $pesoNuevaCaja kg cargada con éxito.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Inventario - Almacén</title>
</head>
<body>
    <h2>Simulador de Carga de Camión</h2>
    
    <form method="POST">
        Capacidad máxima del camión (kg): 
        Peso : <input type="text" name="" required><br><br>
        <input type="number" name="limite" value="<?php echo $limite > 0 ? $limite : 100; ?>" required>
        <button type="submit">Empezar a Cargar</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr>
        <h3>Proceso de Carga:</h3>
        <ul>
            <?php foreach ($log as $paso): ?>
                <li><?php echo $paso; ?></li>
            <?php endforeach; ?>
        </ul>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr bgcolor="#f2f2f2">
                <th>Resumen Final</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Total Cajas Cargadas</td>
                <td><?php echo $cajasCargadas; ?> cajas</td>
            </tr>
            <tr>
                <td>Peso Final del Camión</td>
                <td><?php echo $pesoActual; ?> kg</td>
            </tr>
            <tr>
                <td>Espacio Sobrante (Vacío)</td>
                <td><?php echo $limite - $pesoActual; ?> kg</td>
            </tr>
        </table>
    <?php endif; ?>

</body>
</html>
