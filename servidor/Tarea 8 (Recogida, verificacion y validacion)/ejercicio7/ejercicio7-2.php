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
$email=$_POST["email"];
$contraseña=$_POST["contrasenna"];
$nombreValido='/^([[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]])*[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';
$apellidoValido='/^([[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]])+[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';

if (preg_match($nombreValido,$nombre)&&(preg_match($apellidoValido,$apellidos))) {
    print "Tu nombre es: $nombre. ";
    print "Tu apellido es: $apellidos.";
}elseif (preg_match($nombreValido,$nombre)&&(!preg_match($apellidoValido,$apellidos))) {
    print "no has introducido un el apellido valido";
}elseif (!preg_match($nombreValido,$nombre)&&(preg_match($apellidoValido,$apellidos))) {
    print "no has introducido un el nombre valido";
}else {
    print "<br>No has introducido ni nombre ni apellidos validos";
}
print "<br>Tu e-mail es: $email.";
print "<br>Tu contraseña es: $contraseña.";



if(isset($_POST["sexo"])){
    if ($_POST["sexo"]=="botonhombre") {
        print "<br>Has seleccionado la opcion 'Hombre'";
    }else{
        print "<br>Has seleccionado la opcion 'Mujer'";
    }
}else{
    print "<br>No has seleccionado ninguna opcion en 'Sexo'";
}


if(isset($_POST["nivelestudios"])){
    if ($_POST["nivelestudios"]=="certificadoEscolar") {
        print "<br>Seleccionaste los estudios 'Certificado escolar'";
    }elseif ($_POST["nivelestudios"]=="ESO"){
        print "<br>Seleccionaste los estudios 'ESO'";
    }elseif ($_POST["nivelestudios"]=="bachillerFp"){
        print "<br>Seleccionaste los estudios 'Bachiller/FP'";
    }elseif ($_POST["nivelestudios"]=="diplomado"){
        print "<br>Seleccionaste los estudios 'Diplomado'";
    }elseif ($_POST["nivelestudios"]=="licenciadoDoctorado"){
        print "<br>Seleccionaste los estudios 'Licenciado o Doctorado'";
    }else{
        print "<br>Has seleccionado la opcion 'Otro'";
    }

}else{
    print "<br>No has seleccionado ninguna opcion en 'nivel de estudios'<br>";
}

foreach ($_POST["aficiones"] as $key => $value) {

    print "<br>Esta interesado en el tema '$value'";
 
}

if ($_POST["menu"]=="nada") {
    print "<br>no ha seleccionado un dia";
}
elseif ($_POST["menu"]=="lunes") {
    print "<br>Seleccionaste el lunes como dia";
}
elseif ($_POST["menu"]=="martes") {
    print "<br>Seleccionaste el martes como dia";
}
elseif ($_POST["menu"]=="miercoles") {
    print "<br>Seleccionaste el miercoles como dia";
}
elseif ($_POST["menu"]=="jueves") {
    print "<br>Seleccionaste el jueves como dia";
}
elseif ($_POST["menu"]=="viernes") {
    print "<br>Seleccionaste el viernes como dia";
}
elseif ($_POST["menu"]=="sabado") {
    print "<br>Seleccionaste el sabado como dia";
}
elseif ($_POST["menu"]=="domingo") {
    print "<br>Seleccionaste el domingo como dia";
}
else{
    print"<br>error";
}
?>

</body>
</html>