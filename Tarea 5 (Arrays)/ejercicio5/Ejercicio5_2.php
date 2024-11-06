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

            $num_valores = rand($min_valores,$max_valores);

            print "<h2><b>Datos iniciales</b></h2>";
            print "<p>Numero de valores en la matriz: $num_valores</p>";
            print "<p>Valores elegidos al azar entre $valor_min y $valor_max</p>";
            print "<h2><b>Matriz de valores</b></h2>";

            for ($i=0; $i < $num_valores; $i++) { 
                $num_random = rand($valor_min,$valor_max);
                $array[] = $num_random;
            }
            print_r($array);

		?> 
    </body>
</html>