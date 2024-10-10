<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $numero = $_POST["caja"];

function ejercicio1($numero){

    $cont=0;
    for ($i=1; $i <= $numero ; $i++) { 
       if ($numero%$i==0) {
        $cont++;
       }}
    if ($cont==2) {
        print "es un numero primo";
    }else {
        print "no es un numero primo";
    }

}

ejercicio1();
    ?>

</body>
</html>