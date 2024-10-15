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
    <form action=\"ejercicio5-2.php\" method=\"POST\">
    <fieldset>
    
    <legend>Formulario</legend>
   
    <p>Indique su edad: </p>
    <p>Edad:
      <select name = \"menu\" >
        <option value=\"nada\">...</option>
        <option value=\"-20\">menos de 20 años</option>
        <option value=\"20-39\">Entre 20 y 39 años</option>
        <option value=\"40-59\">Entre 40 y 59 años</option>
        <option value=\"60-\">Mas de 60 años</option>
      </select>
      <br>
    <button type=\"submit\">Enviar</button>
    <button type=\"reset\">Borrar</button>
    </fieldset>
    </p>
    <form>
    "
    ?>
</body>
</html>