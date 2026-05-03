<?php

    $log = [];
    $suma = 0;
    $num_tiradas = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $sumatotal = (int)$_POST["limite"];
    while ($suma < $sumatotal){
        $tirada = rand(1, 6);

        if(($suma + $tirada) >= $sumatotal){
            $suma += $tirada; 
            $log[] = "¡Último tiro! Salió $tirada. Suma final: $suma.";
            break;
        }

        $suma = $suma + $tirada;
        $num_tiradas++;
        $log[] = "Tiro $num_tiradas que salio $tirada sumado con éxito.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Suma de tiradas de dados:
        <input type="number" name="limite" value="<?php echo $limite > 0 && $limite < 100 ? $limite : 20; ?>" required>
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
        <h3><?php echo "Suma total: ". $suma; ?></h3>
    <?php endif; ?>
</body>
</html>