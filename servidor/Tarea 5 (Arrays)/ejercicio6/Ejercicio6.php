<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            print "<form action=\"./Ejercicio6_2.php\" method=POST>";
            print "<p>Numero mínimo de valores: <input type=number name=min_valores></p>";
            print "<p>Numero máximo de valores: <input type=number name=max_valores></p>";
            print "<p>Valor mínimo: <input type=number name=valor_min></p>";
            print "<p>Valor máximo: <input type=number name=valor_max></p>";
            print "<p>Valor a eliminar: <input type=number name=valor_eliminar></p>";
            print "<p><input type=submit value=Mostrar>   ";
            print "   <input type=reset value=Borrar></p>";
            print "</form>";
		?> 
    </body>
</html>