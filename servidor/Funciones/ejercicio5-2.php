<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <?php
$numeroFilas = $_POST["caja1"];
$numeroColumnas = $_POST["caja2"];
    print "<form action= \"ejercicio5-3.php\" method=post>";
for ($i=0; $i <$numeroFilas ; $i++) { 
    for ($j=0; $j <$numeroColumnas ; $j++) { 
        
        print "<input type=\"number\" name=\"caja$i$j\">";
    }
    print "<br>";
}
    print "<button type=\"submit\">Enviar</button>";
    print " <button type=\"reset\">Reset</button>";
    print "<input type=\"hidden\" name=\"caja1\" value=$numeroFilas>";
    print "<input type=\"hidden\" name=\"caja2\" value=$numeroColumnas>";   
    print "</form>";
    ?>

</body>
</html>