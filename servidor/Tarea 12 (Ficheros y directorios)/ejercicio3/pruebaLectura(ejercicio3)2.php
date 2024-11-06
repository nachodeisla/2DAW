<?php
if (isset($_POST["enviar"])) {
    $nombre = $_POST["cajaNombre"];
    $comentario = $_POST["cajaComentario"];
    $separador = "------------------------";

    $file = "./lectura(ejercicio3).txt";
    
    $fp = fopen($file,"a");
    fwrite($fp,$nombre."\r\n");
    fwrite($fp,$comentario."\r\n");
    fwrite($fp,$separador."\r\n");

    fclose($fp);
}
    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <?php

    print "<p>Los datos se cargaron correctamente.</p>";

    print "<p>Pulse <a href=\"./pruebaLectura(ejercicio3)3.php\">aqui</a> para ver todo el contenido.</p>"

    print "<p><a href=\"./pruebaLectura(ejercicio3)1.php\">volver al formulario.</a></p>";
    ?>
</body>
</html>