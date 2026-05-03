<?php
/*
Para PHP, un ejercicio excelente para empezar es crear un Validador de 
Inicio de Sesión (Login) básico. Este ejercicio te ayudará a practicar 
la captura de datos de formularios, el uso de arreglos y, por supuesto, 
las estructuras condicionales que estábamos viendo.El Reto: Sistema de 
Acceso Crea un script donde un usuario ingrese su nombre de usuario y una
contraseña. El programa debe validar si los datos coinciden con un "usuario
registrado" en el sistema.
*/

$nombre = "Maycol";
$contraseña = "May9123";

$nonv = $_POST["nombre"];
$conv = $_POST["contraseña"];

if ($nonv == $nombre && $conv == $contraseña){
    echo "Registrado";
}else{
    echo "Datos incorectos";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Contraseña: <input type="text" name="contraseña" required><br><br>
    <input type="submit" name="INGRESAR" value="INGRESAR">
</form>
</body>
</html>