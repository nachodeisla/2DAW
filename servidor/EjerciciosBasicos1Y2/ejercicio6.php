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

$random1 = rand(1,6);
print "<img src=\"../img/$random1.svg\"> <br>";
$ficha = "<svg width= 110 height 110><circle cx=50 cy=50 r=45 stroke=black stroke-width=2 fill = red>";

$numero1 =1;
$numero2 =2;
$numero3 =3;
$numero4 =4;
$numero5 =5;
$numero6 =6;

switch ($random1){
case '1':
    $numero1 =$ficha;
    
    break;
    case '2':
        $numero2 =$ficha;
        break;
        case '3':
            $numero3 =$ficha;
            break;
            case '4':
                $numero4 =$ficha;
                break;
                case '5':
                    $numero5 =$ficha;
                    break;
                    case '6':
                        $numero6 =$ficha;
                        break;

}
print"

        <table border=1>
            <tr>
                <td class=td>$numero1</td>
                <td class=td>$numero2</td>
                <td class=td>$numero3</td>
                <td class=td>$numero4</td>
                <td class=td>$numero5</td>
                <td class=td>$numero6</td>
            </tr>
            
        </table>

    "


?>

</body>
</html>