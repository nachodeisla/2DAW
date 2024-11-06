<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dni = $_POST["dni"];
        $letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];

        $letra = $dni%23;

        print "<h2><b>Respuesta</b></h2>";
        print "La letra del dni $dni es ".$letras[$letra];
    ?>
</body>
</html>