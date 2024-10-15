<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
$fondo=$_POST["fondo"];
$letra=$_POST["letra"];
print"<body style = \"background-color:$fondo\">";
print "<h1 style = \"color:$letra\">COLORES 2 (FORMULARIOS)</h1>";
print"<p style = \"color:$letra\">Se han cambiado los colores elegidos</p>";




print "<p><a href=\"./ejercicio4\">Volver al formulario</a></p>";
?>

</body>
</html>