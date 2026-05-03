<?php
$totalCamionesAtendidos = 0;
$totalCajasDespachadas = 0;
$reporteDia = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 1; $i <= 3; $i++) {
        $cajasEnEstante = rand(5, 10); 
        $cajasOriginales = $cajasEnEstante;
        $camionesEnEsteEstante = 0;

        $reporteDia[] = "<strong>--- Iniciando Despacho Estante #$i ($cajasOriginales cajas disponibles) ---</strong>";

        while ($cajasEnEstante > 0) {
            $pedidoCamion = rand(1, 3);
            $camionesEnEsteEstante++;
            $totalCamionesAtendidos++;

            if ($pedidoCamion <= $cajasEnEstante) {
                $cajasDespachadas = $pedidoCamion;
            } else {

                $cajasDespachadas = $cajasEnEstante;
            }

            $cajasEnEstante -= $cajasDespachadas;
            $totalCajasDespachadas += $cajasDespachadas;

            $reporteDia[] = "Camión #$camionesEnEsteEstante se llevó $cajasDespachadas cajas. Quedan: $cajasEnEstante.";
        }

        $reporteDia[] = "✅ Estante #$i vacío después de $camionesEnEsteEstante camiones.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulador de Almacén</title>
</head>
<body>
    <h1>🚛 Sistema de Despacho Logístico</h1>
    
    <form method="POST">
        <button type="submit">Simular Jornada de Trabajo</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr>
        <h3>Log de Operaciones:</h3>
        <div>
            <?php foreach ($reporteDia as $linea): ?>
                <p style="margin: 5px 0;"><?php echo $linea; ?></p>
            <?php endforeach; ?>
        </div>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr bgcolor="#4CAF50" style="color:white;">
                <th>Métrica del Día</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td>Total Camiones Atendidos:</td>
                <td><?php echo $totalCamionesAtendidos; ?> camiones</td>
            </tr>
            <tr>
                <td>Total Cajas Despachadas:</td>
                <td><?php echo $totalCajasDespachadas; ?> cajas</td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>