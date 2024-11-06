<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$nombreValido='/^([[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]])*[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';
$apellidoValido='/^([[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]])+[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';

if (preg_match($nombreValido,$nombre)&&(preg_match($apellidoValido,$apellidos))) {
    print "Tu nombre es: $nombre. <br>";
    print "Tu apellido es: $apellidos.";
}elseif (preg_match($nombreValido,$nombre)&&(!preg_match($apellidoValido,$apellidos))) {
    print "no has introducido un el apellido valido";
}elseif (!preg_match($nombreValido,$nombre)&&(preg_match($apellidoValido,$apellidos))) {
    print "no has introducido un el nombre valido";
}else {
    print "No has introducido ni nombre ni apellidos validos";
   
}
print "<p><a href=\"./ejercicio1\">Volver al formulario</a></p>"
?>

</body>
</html>