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
    <h1>COLORES 3 (FORMULARIO)</h1>
    <form action=\"ejercicio4-2.php\" method=\"POST\">
    
   
    <p>Elija los colores a cambiar:</p>
    <p>Color de fondo de la pagina: <input type=\"color\" name=\"fondo\"></input></p>
    
    <p>Color de la letra de la pagina: <input type=\"color\" name=\"letra\"></input></p>
    <button type=\"submit\">ENVIAR</button>
    <button type=\"reset\">BORRAR</button>
    
    </fieldset>
    <form>
    "
    ?>
</body>
</html>