<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    foreach ($_POST as $key => $value){
        switch ($key) {
            case 'nombrevalorinicial':
                 $valorinicial = $value;
            break;
            case 'nombreincremento':
                 $incremento = $value;
            break;
                case 'nombrenumerodevalores':
            $numerodevalores = $value;
                break;
    default:
        break;
            }
    }
    print "empezamos con el valor inicial $valorinicial, incrementamos valores de $incremento en $incremento un total de $numerodevalores veces<br>";
    print "$valorinicial <br>";
        for ($i=0; $i < $numerodevalores-1; $i++){ 
            
            $valorinicial= $valorinicial+$incremento;
            print "$valorinicial<br>";
            }



?>
</body>
</html>