<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php

$caracter = $_POST["caja"];
$alfabetoMinuscula = "/^[a-z]+$/";
$alfabetoMayuscula = "/^[A-Z]+$/";

function ejercicio3($alfabetoMinuscula, $alfabetoMayuscula, $caracter){
if (preg_match($alfabetoMayuscula,$caracter)) {
    print("La letra $caracter es una letra mayúscula");
}
else if (preg_match($alfabetoMinuscula,$caracter)) {
    print("La letra $caracter es una letra minúscula");
}
else if (is_numeric($caracter)) {
    print("El carcater $caracter es un carácter numérico");
}
else if ($caracter == " ") {
    print("Es un carácter en blanco");
}
else if (ctype_punct($caracter)) {
    print("Es un carcater de puntuacion");
}
else{
print("Es otra cosa");

}}

ejercicio3($alfabetoMinuscula, $alfabetoMayuscula, $caracter);
?>
</body>
</html>