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
$peso=$_POST["peso"];
if (preg_match($nombreValido,$nombre)&&(preg_match($apellidoValido,$apellidos))) {
    print "Tu nombre es: $nombre. ";
    print "Tu apellido es: $apellidos.";
}elseif (preg_match($nombreValido,$nombre)&&(!preg_match($apellidoValido,$apellidos))) {
    print "no has introducido un el apellido valido";
}elseif (!preg_match($nombreValido,$nombre)&&(preg_match($apellidoValido,$apellidos))) {
    print "no has introducido un el nombre valido";
}else {
    print "No has introducido ni nombre ni apellidos validos";
}

if ($_POST["menu"]=="nada") {
    print "<br>no ha seleccionado una edad";
}
elseif ($_POST["menu"]=="-20") {
    print "<br>tienes menos de 20 años";
}
elseif ($_POST["menu"]=="20-39") {
    print "<br>tienes entre 20 y 39 años";
}
elseif ($_POST["menu"]=="40-59") {
    print "<br>tienes entre 40 y 59 años";
}
elseif ($_POST["menu"]=="60-") {
    print "<br>tienes mas de 60 años";
}else{
    print"<br>error";
}


if(isset($_POST["sexo"])){
    if ($_POST["sexo"]=="botonhombre") {
        print "<br>Has seleccionado la opcion 'Hombre'";
    }else{
        print "<br>Has seleccionado la opcion 'Mujer'";
    }

}else{
    print "<br>No has seleccionado ninguna opcion en 'Sexo'";
}


if(isset($_POST["estadocivil"])){
    if ($_POST["estadocivil"]=="soltero") {
        print "<br>Has seleccionado la opcion 'Soltero'";
    }elseif ($_POST["estadocivil"]=="casado"){
        print "<br>Has seleccionado la opcion 'Casado'";
    }else{
        print "<br>Has seleccionado la opcion 'Otro'";
    }

}else{
    print "<br>No has seleccionado ninguna opcion en 'estado civil'";
}


foreach ($variable as $key => $value) {
 
}

if ((isset($_POST["cine"]))||(isset($_POST["literatura"]))||(isset($_POST["tebeos"]))||(isset($_POST["deporte"]))||(isset($_POST["musica"]))||(isset($_POST["television"]))) {
    print "Sus aficiones son:";
        if(isset($_POST["cine"])){
            print " el cine";
            print "<br>";
            }
        if(isset($_POST["literatura"])){
            print ", la literatura";
            print "<br>";
            }
        if(isset($_POST["tebeos"])){
            print " los tebeos";
            print "<br>";
            }
        if(isset($_POST["deportes"])){
            print " los deportes";
            print "<br>";
            }
        if(isset($_POST["musica"])){
            print " la musica";
            print "<br>";
            }
        if(isset($_POST["television"])){
            print " la television";
            print "<br>";
        }
}else{
    print "<br>No has seleccionado ninguna opcion en 'aficion'";
}
?>

</body>
</html>