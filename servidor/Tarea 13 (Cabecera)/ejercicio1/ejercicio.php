<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     if(isset($_GET["error"])){
        print $_GET["error"];
    }
    ?>
    <form action="./lecturaejercicio1.php" method="post">
        <p>introduzca una direccion de sitio web</p>
        <p>(ej https://www.google.es) <input type="text" name="url"></p>
        <input type="submit" name="boton" value="Redireccionar">
    </form>
</body>
</html>