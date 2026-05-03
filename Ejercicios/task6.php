<?php
$saludo = "Hola" . " " . "Mundo";
echo $saludo; // Imprime: Hola Mundo

$texto = "Buenos ";
$texto .= "días"; // Ahora $texto contiene "Buenos días"
?>
<?php
$dominio = "https://mi-tienda.com";
$pagina = "productos";
$id = 123;

$url = $dominio . "/" . $pagina . "?id=" . $id;
echo $url;
// Imprime: https://mi-tienda.com/productos?id=123
?>