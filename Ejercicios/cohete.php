<?php
$combustibleTotalDia = 0;
$cantidadgalones =
$reporte = [];
$cohetesFallidos = 0;
$cohetesExitosos = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for($i=0; $i<=3; $i++){
        $capacidadtanque = 1000;
        $capacidadactual = 0;
        $fallaDetectada = false;

        while($capacidadactual <= $capacidadtanque){
            $galon = rand(100, 250);
            if(($capacidadactual + $galon) > $capacidadtanque){
                break;
            }

            if ($galon == 130) {
                $fallaDetectada = true;
                $combustibleTotalDia += $galon; 
                break;
            }

            $capacidadactual += $galon;
            $combustibleTotalDia += $galon;
        }
        
        if ($fallaDetectada) {
            $cohetesFallidos++;
            $reporte[] = " Cohete #$i: ¡FUGA DETECTADA! (Carga fallida de 130L).";
        } else {
            $cohetesExitosos++;
            $reporte[] = " Cohete #$i: DESPEGUE EXITOSO con $capacidadactual litros.";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Despegues de cohetes</h1>
    <form method="POST">
        <button type="submit">Iniciar Producción del Día</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr>
        <h3>Detalle por Caja:</h3>
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
                <td>Total Lanzamientos:</td>
                <td><?php echo $cohetesExitosos; ?></td>
            </tr>
            <tr>
                <td>Total lanzamientos fallados:</td>
                <td><strong><?php echo $cohetesFallidos; ?></strong></td>
            </tr>
            <tr>
                <td>Total combustible hoy:</td>
                <td><strong><?php echo $combustibleTotalDia; ?></strong></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>
