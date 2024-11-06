<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$euros=$_REQUEST["euros"];


if (isset($_REQUEST["dolar"])) {
    $dolaresfinal = $euros/1;
    print "$euros dolares son ".round($dolaresfinal,2)." euros ";
}elseif (isset($_REQUEST["peso"])) {
    $pesosfinal = $euros/10.08;
    print "$euros pesos son ".round($pesosfinal,2)." euros ";
}elseif (isset($_REQUEST["yen"])) {
    $yenesfinal = $euros/143.05;
    print "$euros yenes son ".round($yenesfinal,2)." euros ";
}elseif (isset($_REQUEST["peseta"])) {
    $pesetasfinal = $euros/166.386;
    print "$euros pesetas son ".round($pesetasfinal,2)." euros ";
}

?>

</body>
</html>