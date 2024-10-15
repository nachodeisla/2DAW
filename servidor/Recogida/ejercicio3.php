<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>


fieldset {
  background-color: #c5abff;
  border-color:#8e53ff;
}

legend {
  background-color: #8e53ff;
  
  
}

</style>
<body>
    <?php
    print"
    <h1>DATOS PERSONALES</h1>
    <form action=\"ejercicio3-2.php\" method=\"POST\">
    <fieldset>
    
    <legend>Formulario</legend>
   
    <p>Aficiones:
    <input type=\"checkbox\" name=\"cine\">Cine</input>
    <input type=\"checkbox\" name=\"literatura\">Literatura</input>
    <input type=\"checkbox\" name=\"musica\">Musica</input></p>
    <button type=\"submit\">ENVIAR</button>
    <button type=\"reset\">BORRAR</button>
    
    </fieldset>
    <form>
    "
    ?>
</body>
</html>