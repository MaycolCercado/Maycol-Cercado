<?php
/*
El Reto: Sistema de Promedios y Becas
Crea un script donde se ingresen 3 notas (de 0 a 20)
 y el nombre del estudiante. El programa debe hacer lo siguiente:
Calcular el promedio.
Determinar el estado:
Aprobado: Promedio mayor o igual a 13.
Desaprobado: Promedio menor a 13.
Determinar si aplica a Beca:
Solo si está Aprobado Y su promedio es mayor o igual a 18.
Validación Especial: Si alguna de las notas ingresadas es mayor a 20 o menor a 0, debe mostrar un error.
*/
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