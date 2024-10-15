<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php

$fecha = $_POST["fecha"];
$fechaValida = '/^[[:digit:]]{2}\/[[:digit:]]{2}\/[[:digit:]]{4}+$/';


function comprobarFecha($fecha,$fechaValida){
    if(preg_match($fechaValida,$fecha)){
        print "la fecha es valida";

    }else{
        print "la fecha no es valida";

    }


}
comprobarFecha($fecha,$fechaValida);

?>
</body>
</html>