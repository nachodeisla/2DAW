<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$dias=["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
foreach ($dias as $key => $value){
    print " el dia ".($key+1)." es el $value,";
}


?>

</body>
</html>