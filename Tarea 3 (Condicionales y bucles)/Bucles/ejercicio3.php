<html>
<head>
<meta charset ='utf8'>

<style>
.td{

    width: 135px;
    height: 135px;
    text-align:center;
    font-size:110px;
}

</style>
</head>
<body>
<?php 

$random1 = rand(1,10);



$principio = "<table border=1><tr>";
$medio = "<td class=td>$ficha</td>";
$final ="</tr></table>";
print "actualice la pagina para randomizxar los cirsulos <br>";
print "<h1>$random1 circulos</h1>";
print"$principio";
for($i = 0; $i<$random1; $i++){
    $color1 = rand(0,255);
    $color2 = rand(0,255);
    $color3 = rand(0,255);
    $numero = rand(1,9);
    $ficha = "<svg width= 100 height 100><circle cx=50 cy=50 r=45 stroke=black stroke-width=2 fill = rgb($color1,$color2,$color3)></circle><text x=25% y=55% font-size=100px>$numero</text></svg>";
    $medio = "<td class=td>$ficha</td>";
print "$medio";
}
print"$final";
?>

</body>
</html>