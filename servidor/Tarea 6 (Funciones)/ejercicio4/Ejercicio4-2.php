<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        $caja1=$_POST['caja1'];
        $caja2=$_POST['caja2'];
        $caja3=$_POST['caja3'];
        $fila1 = $caja1+$caja2+$caja3;

        $caja4=$_POST['caja4'];
        $caja5=$_POST['caja5'];
        $caja6=$_POST['caja6'];
        $fila2=$caja4+$caja5+$caja6;

        $caja7=$_POST['caja7'];
        $caja8=$_POST['caja8'];
        $caja9=$_POST['caja9'];
        $fila3=$caja7+$caja8+$caja9;

        function ejercicio4($fila1,$fila2,$fila3){

        print("La suma de la fila 1 es $fila1 </br>");
        print("La suma de la fila 2 es $fila2 </br>");
        print("La suma de la fila 3 es $fila3 </br>");

        if ($fila1>$fila2 && $fila1>$fila3) {
            print("La fila mayor es $fila1 y es la fila 1 </br>");
        }
        else if ($fila2>$fila1 && $fila2>$fila3) {
            print("La fila mayor es $fila2 y es la fila 2 </br>");
        }
        else if($fila3>$fila1 && $fila3>$fila2){
            print("La fila mayor es $fila3 y es la fila 3 </br>");

        }
    }

    ejercicio4($fila1,$fila2,$fila3);
    
    ?>

</body>
</html>