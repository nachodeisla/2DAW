<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php

$patron = $_POST["patron"];
$comparar = ["juanang@alpex.org","juan.ang@al.pex.com","JUANANG@pex,com.es"];


function comparar($patron, $comparar){
    foreach ($comparar as $key => $value) {
        if ($patron==$value) {
            print "la cadena $patron es igual a la cadena $value <br>";
        }
        else{
            print "la cadena $patron no es igual a la cadena $value <br>" ;
        }
    } 


}
comparar($patron, $comparar);

?>
</body>
</html>