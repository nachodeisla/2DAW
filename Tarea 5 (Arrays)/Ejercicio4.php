<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$longArray = rand(5,15);

print "<h2>datos iniciales</h2><br>";
print "el numero de valores de la matriz es $longArray <br>";
print "valores aleatorios entre 0 y 10 <br>";
print "la matriz es :<br>";

for ($i=0; $i < $longArray ; $i++) { 
   $aleatorio = rand(0,10);
$arraynumeros[]= $aleatorio;
}
$arraynumeros[$aleatorio];
foreach ($arraynumeros as $key => $value){

print "la posicion ".($key+1)." es $value <br>";

}
?>

</body>
</html>