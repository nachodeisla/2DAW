<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php


if(isset($_POST["cine"])){
print "Le gusta el cine";
print "<br>";
}
if(isset($_POST["literatura"])){
    print "Le gusta la literatura";
    print "<br>";
}
if(isset($_POST["musica"])){
    print "Le gusta la musica";
    print "<br>";
}


print "<p><a href=\"./ejercicio3\">Volver al formulario</a></p>"
?>

</body>
</html>