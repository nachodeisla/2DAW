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
print "<table><tbody>"
for ($i=0; $i <$numeroFilas ; $i++) { 
    print "<tr>"
    for ($i=0; $i <$numeroColumnas ; $i++) { 
        print "<td></td>"
    }
    print "</tr>"
}
    print "</tbody></table>"

    ?>

</body>
</html>