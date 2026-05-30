<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Múltiplos</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .resultado { background: #f0f0f0; padding: 10px; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <h2>Calcular los múltiplos de un número</h2>
    
    <form method="post" action="">
        Inicio: <input type="number" name="inicio" required><br><br>
        Fin: <input type="number" name="fin" required><br><br>
        Divisor (Salto): <input type="number" name="divisor" required><br><br>
        
        <input type="submit" name="calcular" value="Calcular Múltiplos">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = (int)$_POST['inicio'];
        $b = (int)$_POST['fin'];
        $c = (int)$_POST['divisor'];
        echo "<div class='resultado'>";
        
        try {
            if ($c == 0) {
                throw new Exception("El divisor (salto) no puede ser cero.");
            }
            $lista = [];
            for ($i = $a; $i <= $b; $i++) {
                if ($i % $c == 0) {
                    $lista[] = $i;
                }
            }
            if (empty($lista)) {
                echo "No se encontraron múltiplos de $c en ese rango.";
            } else {
                echo "<strong>Los múltiplos de $c encontrados son:</strong><br>";
                echo implode(", ", $lista);
            }

        } catch (Exception $e) {
            echo "<span style='color: red;'>Error: " . $e->getMessage() . "</span>";
        }

        echo "</div>";
    }
    ?>
</body>
</html>


