<?php
$log = [];
$presupuesto = 0;
$gastado = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $presupuesto = (float)$_POST["presupuesto"];
    
    $nombres = explode(",", $_POST["nombres"]); 
    $precios = explode(",", $_POST["precios"]);
    
    $i = 0;
    $total_productos = count($nombres);

    while ($i < $total_productos && $gastado < $presupuesto) {
        $nombre_actual = trim($nombres[$i]); 
        $precio_actual = (float)trim($precios[$i]);

        if (($gastado + $precio_actual) > $presupuesto) {
            $log[] = "<span style='color:red;'>No alcanza para: $nombre_actual (S/ $precio_actual)</span>";
            break;
        }

        $gastado += $precio_actual;
        $log[] = "✅ Comprado: <strong>$nombre_actual</strong> por S/ " . number_format($precio_actual, 2);
        $i++;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Lista de Compras</title>
</head>
<body>
    <h2>Simulador de Compras Manual</h2>
    
    <form method="POST">
        Presupuesto Total (S/): <br>
        <input type="number" name="presupuesto" value="<?php echo $presupuesto ?: 100; ?>" required><br><br>
        
        Nombres de productos (separados por comas): <br>
        <input type="text" name="nombres" placeholder="Ej: Pan, Cafe, Queso" style="width: 300px;" required><br><br>
        
        Precios de productos (separados por comas): <br>
        <input type="text" name="precios" placeholder="Ej: 2.50, 15.00, 8.20" style="width: 300px;" required><br><br>
        
        <button type="submit">Procesar Compra</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr>
        <h3>Resultado de la Caja:</h3>
        <ul>
            <?php foreach ($log as $item): ?>
                <li><?php echo $item; ?></li>
            <?php endforeach; ?>
        </ul>
        
        <p><strong>Total Gastado:</strong> S/ <?php echo number_format($gastado, 2); ?></p>
        <p><strong>Vuelto:</strong> S/ <?php echo number_format($presupuesto - $gastado, 2); ?></p>
    <?php endif; ?>
</body>
</html>