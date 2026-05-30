<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h2></h2>
    <form method="post" action="">
        Nombre: <input type="text" name="nombre" required><br><br>
        Matemática: <input type="text" name="matematica" required><br><br>
        Comunicación: <input type="text" name="comunicacion" required><br><br>
        Tecnología: <input type="text" name="tecnologia" required><br><br>
        <input type="submit" value="Calcular Promedio">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $matematica = (float) $_POST["matematica"];
        $comunicacion = (float) $_POST["comunicacion"];
        $tecnologia = (float) $_POST["tecnologia"];

        $promedio = ($matematica + $comunicacion + $tecnologia)/3;

        if ($promedio <= 12) {
            echo "<h3>El alumno $nombre desaprobó con $promedio</h3>";
        } else {
            echo "<h3>El alumno $nombre aprobó con $promedio</h3>";
        }
    }
    ?>
</body>
</html>
