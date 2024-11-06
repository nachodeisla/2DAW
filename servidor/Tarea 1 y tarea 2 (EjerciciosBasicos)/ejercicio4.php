<html>
<head>

<meta charset ='utf8'>

</head>
<body>
<?php 
$num1 = rand(0,255);
$num2 = rand(0,255);
$num3 = rand(0,255);
$num4 = rand(0,255);
$num5 = rand(0,255);
$num6 = rand(0,255);
print "<p> Actualice la pagina para mostrar dos nuevos colores</p>" ;
print "<div style=\"background-color: rgb($num1,$num2,$num3); width:120px; height:20px\"></div>" ;
print "<div style=\"background-color: rgb($num4,$num5,$num6); width:120px; height:20px\"></div>" ;
?>
</body>
</html>