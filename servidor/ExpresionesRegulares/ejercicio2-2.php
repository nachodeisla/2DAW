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
$letraYEspacios ='/^([[:alpha:]][[:space:]])+[[:alpha:]]$/';
$letrasYEspacios ='/^([[:alpha:]]{2, }[[:space:]])+[[:alpha:]]$/'; //duda
$palabraYEspacios ='/^([[:alpha:]]+[[:space:]])+[[:alpha:]]+$/';
$palabraMayuscula ='/^[[:upper:]]+$/';
$fecha ='/^[[:digit:]]{2}\/[[:digit:]]{2}\/[[:digit:]]{4}+$/';
$decimalSinSigno ='/^[[:digit:]](\,|\.)[[:digit:]]{0,2}$/'; //duda
$decimalConSigno ='/^(\-|\+)[[:digit:]](\,|\.)[[:digit:]]{0,2}$/'; //duda
$contraseña ='/^([[:alnum:]]|\*|\+|\.|\-|\_|\,){6, }$/'; 

print("Has escrito: <b>$caracter</b></br>");
if (preg_match($letraYEspacios,$caracter)) {
    print("<p>1.La cadena $caracter son letras separadas por espacios</p>");
    }else{
        print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span>  son letras separadas por espacios</p>");
    }

if (preg_match($letrasYEspacios,$caracter)) {
    print("<p>1.La cadena $caracter son dos o mas letras separadas por espacios</p>");
    }else{
       print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span> no son dos o mas letras separadas por espacios</p>");
    }

if (preg_match($palabraYEspacios,$caracter)) {
    print("<p>1.La cadena $caracter son una o mas palabras separadas por espacios</p>");
    }else{
        print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span> no es una o mas palabras separadas por espacios</p>");
     }
if (preg_match($palabraMayuscula,$caracter)) {
    print("<p>1.La cadena $caracter una palabra mayuscula</p>");
    }else{
        print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span> no es una palabra mayuscula</p>");
    }
if (preg_match($fecha,$caracter)) {
    print("<p>1.La cadena $caracter es una fecha</p>");
    }else{
        print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span> es una fecha</p>");
    }
if (preg_match($decimalSinSigno,$caracter)) {
    print("<p>1.La cadena $caracter es un decimal sin signo (dos decimales maximo)</p>");
    }else{
        print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span> es un decimal sin signo (dos decimales maximo)</p>");
    }
if (preg_match($decimalConSigno,$caracter)) {
    print("<p>1.La cadena $caracter es un decimal con signo(dos decimales maximo)</p>");
    }else{
        print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span> es un decimal con signo(dos decimales maximo)</p>");
    }
if (preg_match($contraseña,$caracter)) {
    print("<p>1.La cadena $caracter es una contrasña valida</p>");
    }else{
        print(  "<p>1.La cadena $caracter <span style=\"color: red\">no</span> es una contraseña valida</p>");
    }


print('</br><a href="./Ejercicio2.php">Volver al formulario</a>');
?>
</body>
</html>