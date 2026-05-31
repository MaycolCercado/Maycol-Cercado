<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Estilo/login.css">
</head>
<body>
    <div class="container">
        <h1>Acceso</h1>
        <form method="POST" action="controlador/verificacion.php">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required placeholder="Ingresa tu usuario">
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required placeholder="Ingresa tu contraseña">
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required placeholder="Ingresa tu contraseña">
            </div>
            
            <button type="submit">Registrar</button>

        </form>
        <div class="form-footer">
            <p>Acceso seguro al sistema</p>
        </div>
    </div>
</body>
</html>