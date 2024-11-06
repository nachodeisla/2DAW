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
$random5 = rand(1,6);
$random6 = rand(1,6);



print "<table><thead><tr><td>Jugador1</td><td>Jugador2</td><td>Resultado</td></tr></thead><tr><td><img src=\"../img/$random1.svg\"><img src=\"../img/$random2.svg\"><img src=\"../img/$random3.svg\"></td><td><img src=\"../img/$random4.svg\"><img src=\"../img/$random5.svg\"><img src=\"../img/$random6.svg\"></td>";

if(($random1==$random2&&$random1==$random3)&&($random4==$random5&&$random4==$random6)){
    if(($random1+$random2+$random3)>($random4+$random5+$random6)){
        print "<td>el trio del jugador 1 es mayor</td>";
    }elseif(($random1+$random2+$random3)<($random4+$random5+$random6)){
        print "<td>el trio del jugador 2 es mayor</td>";
    }elseif(($random1+$random2+$random3)==($random4+$random5+$random6)){
        print "<td>empate de trios</td>";}
}elseif(($random1==$random2&&$random1==$random3)&&(($random4!=$random5)||($random4!=$random6)||($random5!=$random6))){
    print "<td>solo el primer jugador tiene trio</td>";
}elseif(($random4==$random5&&$random4==$random6)&&(($random1!=$random2)||($random1!=$random3)||($random2!=$random3))){
    print "<td>solo el segundo jugador tiene trio</td>";
}elseif (($random1==$random2 || $random1==$random3 || $random2==$random3 )&&($random4==$random5 || $random4==$random6 || $random5==$random6 )) {
    if($random1==$random2){
        if ($random4==$random5) {
            if (($random1+$random2)==($random4+$random5)) {
                if($random3==$random6){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random3>$random6) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random3<$random6) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
                
            }elseif (($random1+$random2)>($random4+$random5)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random1+$random2)<($random4+$random5)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }elseif ($random4==$random6) {
            if (($random1+$random2)==($random4+$random6)) {
                if($random3==$random5){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random3>$random5) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random3<$random5) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
            }elseif (($random1+$random2)>($random4+$random6)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random1+$random2)<($random4+$random6)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }elseif ($random5==$random6) {
            if (($random1+$random2)==($random5+$random6)) {
                if($random3==$random4){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random3>$random4) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random3<$random4) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
            }elseif (($random1+$random2)>($random5+$random6)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random1+$random2)<($random5+$random6)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }
    }elseif($random1==$random3){
        if ($random4==$random5) {
            if (($random1+$random3)==($random4+$random5)) {
                if($random2==$random6){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random2>$random6) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random2<$random6) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
            }elseif (($random1+$random3)>($random4+$random5)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random1+$random3)<($random4+$random5)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }elseif ($random4==$random6) {
            if (($random1+$random3)==($random4+$random6)) {
                if($random2==$random5){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random2>$random5) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random2<$random5) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
            }elseif (($random1+$random3)>($random4+$random6)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random1+$random3)<($random4+$random6)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }elseif ($random5==$random6) {
            if (($random1+$random3)==($random5+$random6)) {
                if($random2==$random4){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random2>$random4) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random2<$random4) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
            }elseif (($random1+$random3)>($random5+$random6)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random1+$random3)<($random5+$random6)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }
    }elseif($random2==$random3){
        if ($random4==$random5) {
            if (($random2+$random3)==($random4+$random5)) {
                if($random1==$random6){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random1>$random6) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random1<$random6) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
            }elseif (($random2+$random3)>($random4+$random5)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random2+$random3)<($random4+$random5)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }elseif ($random4==$random6) {
            if (($random2+$random3)==($random4+$random6)) {
                if($random1==$random5){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random1>$random5) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random1<$random5) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
            }elseif (($random2+$random3)>($random4+$random6)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random2+$random3)<($random4+$random6)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }elseif ($random5==$random6) {
            if (($random2+$random3)==($random5+$random6)) {
                if($random1==$random4){
                    print "<td>empate de parejas y empate de dado libre</td>";
                }elseif ($random1>$random4) {
                    print "<td>empate de parejas. Gana jugador 1 por dado libre</td>";
                }elseif ($random1<$random4) {
                    print "<td>empate de parejas. Gana jugador 2 por dado libre</td>";
                }
            }elseif (($random2+$random3)>($random5+$random6)) {
                print "<td>gana el jugador 1 por lucha de parejas</td>";
            }elseif (($random2+$random3)<($random5+$random6)) {
                print "<td>gana el jugador 2 por lucha de parejas</td>";
            }
        }
    }
}elseif (($random1==$random2 || $random1==$random3 || $random2==$random3 )&&($random4!=$random5 || $random4!=$random6 || $random5!=$random6 )) {
    print " <td>gana el primer jugador al solo él tener parejas</td>";
}elseif (($random1!=$random2 || $random1!=$random3 || $random2!=$random3 )&&($random4==$random5 || $random4==$random6 || $random5==$random6 )) {
    print " <td>gana el segundo jugador al solo él tener parejas</td>";
}elseif (($random1!=$random2 || $random1!=$random3 || $random2!=$random3 )&&($random4!=$random5 || $random4!=$random6 || $random5!=$random6 )) {
    if (($random1+$random2+$random3)==($random4+$random5+$random6)) {
        print " <td>empate (sin parejas ni trios)</td>";
    }elseif (($random1+$random2+$random3)>($random4+$random5+$random6)) {
        print "<td>gana jugador 1 (sin parejas ni trios)</td>";
    }elseif (($random1+$random2+$random3)<($random4+$random5+$random6)) {
        print "<td>gana jugador 2 (sin parejas ni trios)</td>";
    }
}else{
print "<td>error</td>";

}





?>
</body>
</html>