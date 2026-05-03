<?php
/*El Reto: Sistema de Clasificación de Gimnasio
Vas a crear un script donde se ingrese el nombre de una persona y su edad. El programa debe determinar a qué categoría pertenece y cuánto debe pagar de inscripción mensual:

Categoría Infantil: De 5 a 12 años. Pago: S/ 50.

Categoría Juvenil: De 13 a 17 años. Pago: S/ 80.

Categoría Adulto: De 18 a 60 años. Pago: S/ 120.

Categoría Adulto Mayor: Más de 60 años. Pago: S/ 60.

Restricción: Si tiene menos de 5 años, el programa debe decir que no tiene edad suficiente para inscribirse.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];


    if ($edad < 5) {
        echo "Lo sentimos $nombre, eres muy pequeño para el gimnasio.";
    } elseif ($edad >= 5 && $edad <= 12) {
        echo "El pago sera de S/50";
    } elseif ($edad >= 13 && $edad <= 17){
        echo "El pago sera de S/ 80";
    } elseif ($edad >= 18 && $edad <= 60){
        echo "El pago sera de S/ 120";
    }else{
        echo "El paso sera de S/ 60";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gimnasio PHP</title>
</head>
<body>
    <form method="POST">
        Nombre: <input type="text" name="nombre" required><br><br>
        Edad: <input type="number" name="edad" required><br><br>
        <input type="submit" value="Verificar Categoría">
    </form>
</body>
</html>