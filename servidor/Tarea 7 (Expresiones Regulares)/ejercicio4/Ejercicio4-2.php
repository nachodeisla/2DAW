<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php

$telfEsp = $_POST["telfEsp"];
$telefono = '/^(\+34)(6|9)[0-9]{8}$/';


function telefonoEspanna($telfEsp,$telefono){
    if(preg_match($telefono,$telfEsp)){
        print "el telefono es de España";

    }else{
        print "el telefono no es de España";

    }


}
telefonoEspanna($telfEsp,$telefono);

?>
</body>
</html>