<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$peso=$_REQUEST["cajapeso"];
$altura=$_REQUEST["cajaaltura"];

$imc=$peso/($altura*$altura);
print "$imc es el imc de una persona que pesa $peso kg y mide $altura m ";

?>

</body>
</html>