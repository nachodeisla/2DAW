<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "<form action= \"ejercicio4-2.php\" method=post>
    <p>Convertir a euros (entre 0 y 1.000.000): <input type=\"text\" name=\"euros\"></p>
    <input type=\"radio\" name=\"dolar\">Dólares
    <input type=\"radio\" name=\"peso\">Peso
    <input type=\"radio\" name=\"yen\">Yenes
    <input type=\"radio\" name=\"peseta\">Pesetas<br>
    <button type=\"submit\">Calcular</button>
    <button type=\"reset\">Borrar</button>
    </form>"
    ?>
</body>
</html>