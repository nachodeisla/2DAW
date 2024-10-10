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

function caja1($numeroFilas, $numeroColumnas){
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
}
//-----------------------------------------------------------------
$numeroFilas = $_POST["caja1"];
$numeroColumnas = $_POST["caja2"];
function caja2($numeroFilas, $numeroColumnas){
print "tabla final";
print "<table border=2><tbody>";
for ($i=$numeroFilas-1; $i >=0; $i--) { 
    print "<tr>";
    for ($j=$numeroColumnas-1; $j >=0 ; $j--) { 
        $valorCaja = $_POST["caja$i$j"];
        
        print "<td>$valorCaja</td>";
    }
    print "</tr>";
}
    print "</tbody></table>";
}
caja1();
caja2();


    ?>

</body>
</html>