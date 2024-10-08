<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$A=$_REQUEST["cajaa"];
$B=$_REQUEST["cajab"];
$A=$_REQUEST["cajac"];
$TOTAL1=(-$B+sqrt(($B*$B)-(4*($A*$C))))/(2*$A);
$TOTAL2=(-$B-sqrt(($B*$B)-(4*($A*$C))))/(2*$A);
print "el total es: $TOTAL1 o $TOTAL2";

?>

</body>
</html>