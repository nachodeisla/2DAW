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
$random3 = rand(1,6);
$random4 = rand(1,6);
print "<table><thead><tr><td>Jugador1</td><td>Jugador2</td><td>Resultado</td></tr></thead><tr><td><img src=\"../img/$random1.svg\"><img src=\"../img/$random3.svg\"></td><td><img src=\"../img/$random2.svg\"><img src=\"../img/$random4.svg\"></td>";

if($random1==$random3 && $random2==$random4){
    if ($random1+$random3>$random2+$random4) {
        print "<td>el ganador es el jugador 1</td>";
    }elseif ($random2+$random4>$random1+$random3) {
      print "<td>el ganador es el jugador 2</td>";
    }else {
        print "<td>que le dice un pato a otro? estamos empatados</td>";
    }
}elseif($random1==$random3 && $random2!=$random4){
    print "<td>el ganador es el jugador 1</td>";
}elseif($random1!=$random3 && $random2==$random4){
    print "<td>el ganador es el jugador 2</td>";
}else{
    if ($random1+$random3>$random2+$random4) {
        print "<td>el ganador es el jugador 1</td>";
    }elseif ($random2+$random4>$random1+$random3) {
      print "<td>el ganador es el jugador 2</td>";
    }else {
        print "<td>que le dice un pato a otro? estamos empatados</td>";
    }

}


print "</tr></table>";






?>
</body>
</html>