<?php
$totalBombonesDia = 0;
$totalPremiumDia = 0;
$pesoTotalDia = 0;
$reporteCajas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    for ($i = 1; $i <= 3; $i++) {
        $capacidadCaja = 500; 
        $pesoActualCaja = 0;
        $bombonesEnCaja = 0;
        $premiumEnCaja = 0;

        
        while ($pesoActualCaja < $capacidadCaja) {
            $pesoBombon = rand(50, 100);

            if (($pesoActualCaja + $pesoBombon) > $capacidadCaja) {
                break;
            }

            $pesoActualCaja += $pesoBombon;
            $bombonesEnCaja++;
            
            if ($pesoBombon == 100) {
                $premiumEnCaja++;
                $totalPremiumDia++;
            }
        }

        $totalBombonesDia += $bombonesEnCaja;
        $pesoTotalDia += $pesoActualCaja;
        
        $reporteCajas[] = "Caja #$i completada con $bombonesEnCaja bombones ($premiumEnCaja Premium). Peso: $pesoActualCaja g.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fábrica de Chocolates</title>
</head>
<body>
    <h1> Producción de Chocolates</h1>
    <form method="POST">
        <button type="submit">Iniciar Producción del Día</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr>
        <h3>Detalle por Caja:</h3>
        <ul>
            <?php foreach ($reporteCajas as $caja): ?>
                <li><?php echo $caja; ?></li>
            <?php endforeach; ?>
        </ul>

        <table border="1" cellpadding="10">
            <tr bgcolor="#ffeb3b">
                <th colspan="2">RESUMEN DEL DÍA</th>
            </tr>
            <tr>
                <td>Total Bombones:</td>
                <td><?php echo $totalBombonesDia; ?></td>
            </tr>
            <tr>
                <td>Bombones Premium (100g):</td>
                <td><strong><?php echo $totalPremiumDia; ?></strong></td>
            </tr>
            <tr>
                <td>Peso Total Producido:</td>
                <td><?php echo ($pesoTotalDia / 1000); ?> kg</td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>
