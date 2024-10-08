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
print "tabla original";
print "<table border=2><tbody>";
for ($i=0; $i <$numeroFilas ; $i++) { 
    print "<tr>";
    for ($j=0; $j <$numeroColumnas ; $j++) { 
        $valorCaja = $_POST["caja$i$j"];
        
        print "<td>$valorCaja</td>";
    }
    print "</tr>";
}
    print "</tbody></table>";
//-----------------------------------------------------------------
$numeroFilas = $_POST["caja1"];
$numeroColumnas = $_POST["caja2"];
print "tabla final";
print "<table border=2><tbody>";
for ($i=0; $i <$numeroFilas ; $i++) { 
    print "<tr>";
    for ($j=0; $j <$numeroColumnas ; $j++) { 
        $valorCaja = $_POST["caja$i$j"];
        
        print "<td>$valorCaja</td>";
    }
    print "</tr>";
}
    print "</tbody></table>";

    ?>

</body>
</html>