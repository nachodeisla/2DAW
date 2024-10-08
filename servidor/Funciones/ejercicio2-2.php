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

    
    for ($i=1; $i <=$numero ; $i++) { 
        if ($numero%$i==0) {
            print $numero/$i."<br>";
            $numero= $numero/$i;
            
        }
        
        
     }
    
    ?>

</body>
</html>