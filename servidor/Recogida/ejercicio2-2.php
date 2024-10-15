<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


if(isset($_POST["sexo"])){
    if ($_POST["sexo"]=="botonhombre") {
        print "Has seleccionado la opcion 'Hombre'";
    }else{
        print "Has seleccionado la opcion 'Mujer'";
    }

}else{
    print "No has seleccionado ninguno de las dos opciones";
}

print "<p><a href=\"./ejercicio2\">Volver al formulario</a></p>"

?>

</body>
</html>