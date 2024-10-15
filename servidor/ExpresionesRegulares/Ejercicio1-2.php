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
$vacio ='/^[[:space:]]*$/';
$palabraUnica ='/^[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';
$dosPalabras = '/^[[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]]+[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';
$palabraInglesa = '/^[[:alpha:]]+$/i';
$minusculas = '/^a*e*i*o*u*$/';
$numero= '/^[[:digit:]]+$/';
$telefono = '/^(6|9)[0-9]{8}$/';
$dni = '/^[0-9]{8}[[:upper:]]?$/';
$postal = '/^[0-4][0-9]{4}$/';


print("Has escrito: <b>$caracter</b></br>");
if (preg_match($vacio,$caracter)) {
    print("<p>1.La cadena $caracter es un espacio en blanco o esta vacia</p>");
    }else{
        print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span>  es un espacio en blanco y <span style=\"color: red\">no</span> esta vacia</p>");
    }

if (preg_match($palabraUnica,$caracter)) {
    print("<p>2.La cadena $caracter es una unica palabra</p>");
    }else{
    print("<p>2.La cadena $caracter <span style=\"color: red\">no</span> es una unica palabra</p>");
    }

if (preg_match($dosPalabras,$caracter)) {
    print("<p>3.La cadena $caracter son dos palabras</p>");
    }else{
    print("<p>3.La cadena $caracter <span style=\"color: red\">no</span> son dos palabras</p>");
    }

if (preg_match($palabraInglesa,$caracter)){
    print("<p>4.La cadena $caracter  es una unica palabra que contiene carcateres ingleses</p>");
    }else{print("<p>4.La cadena $caracter <span style=\"color: red\">no</span> es una unica palabra que contiene carcateres ingleses</p>");
    }

if (preg_match($minusculas,$caracter)) {
    print("<p>5.La cadena $caracter es una cadena de vocales en minuscula sin acentuar en orden alfabético</p>");
    }else{
    print("<p>5.La cadena $caracter <span style=\"color: red\">no</span> es una cadena de vocales en minuscula sin acentuar en orden alfabético</p>");  
    }

if (preg_match($numero,$caracter)) {
     print("<p>6.La cadena $caracter es un unico número</p>"
   );
    }else{
    print("<p>6.La cadena $caracter <span style=\"color: red\">no</span> es un unico número</p>");
    }

if(preg_match($numero,$caracter) ) {
    if ($caracter% 2 ==0) {
        print("<p>7.La cadena $caracter es un único número par</p>");
    }else{
        print("<p>7.La cadena $caracter <span style=\"color: red\">no</span> es un único número par</p>");
        }
    }
    
if (preg_match($telefono,$caracter)) {
    print(
      "<p>8.La cadena $caracter es un teléfono con 9 cifras que empiza por 6 o por 9</p>");
    }else{
    print("<p>8.La cadena $caracter <span style=\"color: red\">no</span> es un teléfono con 9 cifras que empiza por 6 o por 9</p>");
    }

if (preg_match($dni,$caracter)) {
    print("<p>9.La cadena $caracter es un número de DNI (de 1 a 8 numeros, con letra inglesa al final mayúscula o sin ella)</p>" );
    }else{
    print("<p>9.La cadena $caracter <span style=\"color: red\">no</span> es un número de DNI (de 1 a 8 numeros, con letra inglesa al final mayúscula o sin ella)</p>");
    }
if (preg_match($postal,$caracter)) {
    print("<p>10.La cadena $caracter es un código postal</p>");
    }else{
    print("<p>10.La cadena $caracter <span style=\"color: red\">no</span> es un código postal</p>");
    }

print('</br><a href="./Ejercicio1.php">Volver al formulario</a>');
?>
</body>
</html>