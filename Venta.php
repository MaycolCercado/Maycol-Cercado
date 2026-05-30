<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

$subtotal = $precio * $cantidad;

if($subtotal < 100){
    echo "El descuento es del 0% | Total a pagar: ". $subtotal;
}
elseif($subtotal >= 100 && $subtotal < 500){
    $newtotal1 = $subtotal - ($subtotal * 0.10);
    echo "El descuento es del 10% | Total a pagar: ".  $newtotal1;
}else{
    $newtotal2 = $subtotal - ($subtotal * 0.20);
    echo "El descuento es del 20% | Total a pagar: ".  $newtotal2;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
</head>
<body>
<form method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Precio: <input type="float" name="precio" required><br><br>
    Cantidad: <input type="int" name="cantidad" required><br><br>
    <input type="submit" name="Calcular" value="Calcular">
</form>
</body>
</html>
