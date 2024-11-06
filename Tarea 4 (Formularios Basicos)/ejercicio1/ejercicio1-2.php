<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$segundostotales=$_REQUEST["caja"];
$minutos=number_format($segundostotales/60);
$segundos=($segundostotales%60);
print "$segundostotales segundos es igual a $minutos minutos y $segundos segundos ";

?>

</body>
</html>