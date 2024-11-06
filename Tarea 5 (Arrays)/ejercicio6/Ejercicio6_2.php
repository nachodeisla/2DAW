<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $min_valores = $_POST["min_valores"];
            $max_valores = $_POST["max_valores"];
            $valor_min = $_POST["valor_min"];
            $valor_max = $_POST["valor_max"];
            $valor_eliminar = $_POST["valor_eliminar"];

            $num_valores = rand($min_valores,$max_valores);

            print "<h2><b>Datos iniciales</b></h2>";
            print "<p>Numero de valores en la matriz: $num_valores</p>";
            print "<p>Valores elegidos al azar entre $valor_min y $valor_max</p>";
            print "<h2><b>Matriz de inicial valores</b></h2>";

            for ($i=0; $i < $num_valores; $i++) { 
                $num_random = rand($valor_min,$valor_max);
                $array[] = $num_random;
            }
            
            print "<pre>";
            print_r($array);
            print "</pre>";

            if (isset($array[$valor_eliminar])) {
                print "<h2><b>Matriz con valor eliminado</b></h2>";
                print "<p>Valor a eliminar: $valor_eliminar</p>";
                
                unset($array[$valor_eliminar]);
                print "<pre>";
                print_r($array);
                print "</pre>";
            }else{
                print "<h2><b>Matriz con valor eliminado</b></h2>";
                print "<p>Valor a eliminar: $valor_eliminar</p>";
                print "El valor indicado no se encuentra en la matriz";
                print "<p><a href=\"Ejercicio6.php\">Volver al formulario</a></p>";
            }
		?> 
    </body>
</html>