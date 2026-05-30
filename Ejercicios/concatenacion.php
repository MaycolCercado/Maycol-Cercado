<?php
$saludo = "Hola" . " " . "Mundo";
echo $saludo;

$texto = "Buenos ";
$texto .= "días"; 
?>
<?php
$dominio = "https://mi-tienda.com";
$pagina = "productos";
$id = 123;

$url = $dominio . "/" . $pagina . "?id=" . $id;
echo $url;
?>
