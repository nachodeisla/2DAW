<html>
<head>
<meta charset ='utf8'>
<style>
    td{
        text-align: center;    }
    
</style>
</head>
<body>
<?php 

$random1 = rand(1,6);
$random2 = rand(1,6);
$final = $random1+$random2;

print "<table><thead><tr><td>Jugador1</td><td>Jugador2</td><td>Resultado</td></tr></thead><tr><td><img src=\"../img/$random1.svg\"></td><td><img src=\"../img/$random2.svg\"></td>";
if ($random1>$random2) {
    print "<td>el ganador es el jugador 1</td>";
}elseif ($random2>$random1) {
  print "<td>el ganador es el jugador 2</td>";
}else {
    print "<td>que le dice un pato a otro? estamos empatados</td>";
}
print "</tr></table>";






?>
</body>
</html>