
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h2{
color: blue;
    }
    fieldset{
margin-right: 70%;

    }
</style>
<body>
    <fieldset>
        <form action="./pruebaLectura(ejercicio3)2.php" method="post">
        <h2>Sugerencias para nuestra página web</h2>
    <p>Introduza su nombre <input type="text" name="cajaNombre"> </p>
    <p>Comentarios sobre esta página web <textarea name="cajaComentario"></textarea> </p>
    <input type="submit" value="Enviar" name="enviar">
    </form>
    </fieldset>
</body>
</html>