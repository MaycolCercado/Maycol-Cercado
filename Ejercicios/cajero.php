<?php
$detalles_escaneo = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = $_POST["nombre"];
    $cantidad = (int)$_POST["cantidad"]; 
    $precio = (float)$_POST["precio"]; 
    $descuento = 0;

    for ($i = 1; $i <= $cantidad; $i++) {
        $detalles_escaneo .= "Producto #$i escaneado... <br>";
    }

    if ($cantidad > 10) {
        $descuento = 0.2;
    } elseif ($cantidad >= 5) {
        $descuento = 0.1;
    } else {
        $descuento = 0;
    }

    $subtotal = $cantidad * $precio;
    $totaldescuento = $subtotal * $descuento;
    $total = $subtotal - $totaldescuento;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cajero de Práctica</title>
</head>
<body>
    <form method="POST">
        Nombre : <input type="text" name="nombre" required><br><br>
        Cantidad : <input type="number" name="cantidad" required><br><br>
        Precio : <input type="number" step="0.01" name="precio" required><br><br>
        <input type="submit" value="Calcular Compra">
    </form>

    <?php if(isset($total)) { ?>
        <hr>
        <h3>LOG DE ESCANEO:</h3>
        <p><?php echo $detalles_escaneo; ?></p>
        
        <h3>*********** TICKET DE VENTA ***********</h3>
        <p>Cliente: <strong><?php echo $nombre; ?></strong></p>
        <p>Estado: REGISTRADO CON ÉXITO</p>
        <p>Subtotal: S/ <?php echo number_format($subtotal, 2); ?></p>
        <p>Descuento aplicado: S/ <?php echo number_format($totaldescuento, 2); ?> (<?php echo ($descuento * 100); ?>%)</p>
        <h3>Total a pagar: S/ <?php echo number_format($total, 2); ?></h3>
    <?php } ?>

</body>
</html>
