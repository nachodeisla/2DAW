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

for ($i=0; $i <$numeroFilas ; $i++) { 
    for ($i=0; $i <$numeroColumnas ; $i++) { 
        print "<input type=\"number\" name=\"caja$i\">"
    }
    print "<br>"
}
    print "<button type=\"submit\">Enviar</button>"
    print " <button type=\"reset\">Reset</button>"

    ?>

</body>
</html>