<?php

    $file = "./lectura(ejercicio2).txt";
$fp = fopen($file, "r+");
$contentido = fread($fp, filesize($file));
$nuevoConntenido = ($contentido);
$nuevoConntenido = $nuevoConntenido + 1;
$fp = fopen($file,"w");
$bytesEscritura = fwrite($fp,$nuevoConntenido);


fclose($fp);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
</body>
</html>