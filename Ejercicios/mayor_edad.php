<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    
    <form method="post" action="">
        Nombre: <input type="text" name="nombre" required><br><br>
        Apellido: <input type="text" name="apellido" required><br><br>
        Edad: <input type="number" name="edad" required><br><br>
        
        <input type="submit" value="Registrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST["nombre"]);
        $apellido = htmlspecialchars($_POST["apellido"]);
        $edad = (int) $_POST["edad"];

        echo "<hr>"; 

        if ($edad < 18) {

            echo "<h3>Lo sentimos $nombre $apellido, tienes $edad años: No te puedes registrar.</h3>";
        } else {
            
            echo "<h3>¡Bienvenido! $nombre $apellido, el registro ha sido exitoso.</h3>";
        }
    }
    ?>
</body>
</html>
