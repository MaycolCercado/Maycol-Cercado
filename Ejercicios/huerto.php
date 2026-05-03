<?php
$sumagoteo = 0;
$goteototal = 0;
$regadofallido = 0;
$regadoexitoso = 0;
$reporte = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for($i=1; $i<=5; $i++){
    $objetivo = rand(300, 500);
    $lluvia = false;
    $sumagoteo = 0;

        while($sumagoteo <= $objetivo){
            $goteo = rand(50, 80);

            if(($sumagoteo + $goteo) > $objetivo){
                break;
            }

            if ($goteo == 77) {
                $lluvia = true;
                $sumagoteo += $goteo; 
                break;
            }
            $sumagoteo += $goteo;
            $goteototal += $goteo;
        }
        
        if ($lluvia) {
            $regadofallido++;
            $reporte[] = "❌ Huerto #$i: ¡No se lleno porque va llover! | cantidad regada $sumagoteo ml";
        } else {
            $regadoexitoso++;
            $reporte[] = "🪴 Huerto #$i: Se rego con $sumagoteo ml.";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGADO</title>
</head>
<body>
    <h1>🪴Huertos regados</h1>
    <form method="POST">
        <button type="submit">Iniciar Producción del Día</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr>
        <h3>Detalle por Huerto:</h3>
        <ul>
            <?php foreach ($reporte as $caja): ?>
                <li><?php echo $caja; ?></li>
            <?php endforeach; ?>
        </ul>

        <table border="1" cellpadding="10">
            <tr bgcolor="#ffeb3b">
                <th colspan="2">RESUMEN DEL DÍA</th>
            </tr>
            <tr>
                <td>Total Huertos regados por el goteo:</td>
                <td><?php echo $regadoexitoso; ?></td>
            </tr>
            <tr>
                <td>Total huertos tenados de regar por la lluvia:</td>
                <td><strong><?php echo $regadofallido; ?></strong></td>
            </tr>
            <tr>
                <td>Total de mililitros regados hoy:</td>
                <td><strong><?php echo $goteototal; ?></strong></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>