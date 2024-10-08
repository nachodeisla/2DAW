<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$colores["fuerte"]["color1"]="rojo:FF0000";
$colores["fuerte"]["color2"]="verde:00FF00";
$colores["fuerte"]["color3"]="azul:0000FF";
$colores["suave"]["color1"]="rosa:FE9ABC";
$colores["suave"]["color2"]="amarillo:FDF189";
$colores["suave"]["color3"]="malva:BC8F8F";

/*
print "colores fuertes: ";
foreach ($colores["fuerte"] as $key => $value){
    print "$value ";
}
print "<br>";
print "colores suaves: ";
foreach ($colores["suave"] as $key => $value){
    print "$value ";
}
*/


print "<table>";
foreach ($colores as $key => $value){
print "<tr><td>color $key: </td>";
    foreach ($value as $key1 => $value1){
print "<td bgcolor=$value1>$value1 </td>";
}

print"</tr>";
}

?>

</body>
</html>