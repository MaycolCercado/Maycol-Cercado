<?php

function promedio(){

    $comu = $_POST ["comu"];
    $mate = $_POST ["mate"];
    $cien = $_POST ["cien"];
    
    $promedio = ($comu + $mate + $cien)/3;

    if (!($comu>0) && !($mate>0) && !($cien>0) && !($comu<0) && !($mate<0) && !($cien<0)){
        echo "Datos invalidos";
    } elseif ($promedio >= 13 && $promedio >=18) {
        echo "Eres aprobado y ademas becado";
    } elseif ($promedio >= 13){
        echo "Eres aprobado";
    } else{
        echo "Has desaprobado";
    }

}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    promedio();
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
<form method="POST">
        Nombre: <input type="text" name="nombre" required><br><br>
        Nota Comunicación : <input type="number" name="comu" required><br><br>
        Nota Matematicas : <input type="number" name="mate" required><br><br>
        Nota Ciencia : <input type="number" name="cien" required><br><br>
        <input type="submit" value="Verificar Categoría">
</form>
</body>
</html>
