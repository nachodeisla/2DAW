<?php
$file = "./lectura(ejercicio3).txt";
    $fp = fopen($file, "r");
    while (!feof($fp)) {
        $contenido = fgets($fp);

    print "<p>".$contenido."</p>";
    }
    


    fclose($fp);

    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <?php
print "<p><a href=\"./pruebaLectura(ejercicio3)1.php\">volver al formulario.</a></p>";

    ?>
</body>
</html>