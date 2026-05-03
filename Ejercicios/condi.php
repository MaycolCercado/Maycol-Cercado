<!DOCTYPE html>
<html>
<head>
    <title>Calcular Múltiplos</title>
</head>
<body>
<?php
echo "--- CALCULADOR DE MÚLTIPLOS ---.<hr>";
$a = 1;  
$b = 10; 
$c = 2;  

echo "Inicio:". $a ."<hr>";
echo "Fin:" . $b ."<hr>";
echo "Divisor:" . $c ."<hr>";

$lista = []; 

if ($c !== 0) {
    for ($i = $a; $i <= $b; $i++) {
        if ($i % $c === 0) {
            $lista[] = $i;
        }
    }
}else{
    echo "Cambia de divizor";
}
echo "Números encontrados: " . implode(", ", $lista) . "\n";
?>
</body>
</html>