<?php
$log = [];
$num_tirada = 0;
$dinero = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = (int)$_POST["limite"];
    while($num_tirada < $cantidad){
        $tirada = rand(1,3);
        if($num_tirada >= $cantidad){
        }
        $num_tirada++;

        if($tirada == 1){
            $log[] = "Auto que es de tipo #$tirada tendra que pagar S/5.00";
            $dinero += 5;
        }elseif($tirada == 2){
            $log[] = "Auto que es de tipo #$tirada tendra que pagar S/10.00";
            $dinero += 10;
        }else{
            $log[] = "Auto que es de tipo #$tirada tendra que pagar S/15.00";
            $dinero += 15;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peaje</title>
</head>
<body>
  <form method="POST">
        Cantidad de carros que quiere procesar: 
        <input type="number" name="limite" value="<?php echo $limite > 0 && $limite < 100 ? $limite : 20; ?>" required>
        <button type="submit">Procesar Compra</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr>
        <h3>Proceso de Carga:</h3>
        <ul>
            <?php foreach ($log as $paso): ?>
                <li><?php echo $paso; ?></li>
            <?php endforeach; ?>
        </ul>
        <h3><?php echo "Cantidad de carros que pasaron: ". $num_tirada; ?></h3>
        <h3><?php echo "Cantidad de dinero recaudado: S/". $dinero; ?></h3>
    <?php endif; ?>
</body>
</html>