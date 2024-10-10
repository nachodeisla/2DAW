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
function ejercicio2($numero){
print $numero." es = 1";
    
     while ($numero%2 == 0) {
        $numero = $numero/2; 
        print " x 2";
     }
     for ($i = 3; $i <= $numero; $i += 2) {
        while ($numero % $i == 0) {
            
            $numero = $numero/$i;
            print " x $i ";
        }
    }
}

ejercicio2();
    ?>

</body>
</html>