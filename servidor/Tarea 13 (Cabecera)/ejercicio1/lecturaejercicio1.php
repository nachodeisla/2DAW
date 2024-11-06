<?php


if(isset($_POST["boton"])){
    $url = $_POST["url"];
    $direccionValida = "/^(http|https):\/\/www\.[a-z]+\.(es|com)$/i";
    $mensajeError = "<p><span style=\"color:red\">error</span></p>";

    if (preg_match($direccionValida, $url)) {
        header("location: $url");
    }else{
         header("location: ./ejercicio.php?error=$mensajeError");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



?>
</body>
</html>