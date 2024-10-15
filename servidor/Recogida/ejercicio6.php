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
    <h1>DATOS PERSONALES 6 (FORMULARIO)</h1>
    <form action=\"ejercicio6-2.php\" method=\"POST\">
    <fieldset>
    
    <legend>Formulario</legend>

    <p><b>Escriba su nombre: </b> <input type=\"text\" name=\"nombre\">
    <b>Escriba su apellido: </b><input type=\"text\" name=\"apellidos\">

  <b>Edad:</b>
      <select name = \"menu\" >
        <option value=\"nada\">...</option>
        <option value=\"-20\">menos de 20 años</option>
        <option value=\"20-39\">Entre 20 y 39 años</option>
        <option value=\"40-59\">Entre 40 y 59 años</option>
        <option value=\"60-\">Mas de 60 años</option>
      </select>
      </p>
      
  <p><b>Escriba su peso: </b><input type=\"number\" name=\"peso\">
<b>Sexo:</b> 
    <input type=\"radio\" name=\"sexo\" value=\"botonhombre\">Hombre</input> 
    <input type=\"radio\" name=\"sexo\" value=\"botonmujer\">Mujer</input>
<b>Estado civil:</b> 
<input type=\"radio\" name=\"estadocivil\" value=\"soltero\">Soltero</input> 
<input type=\"radio\" name=\"estadocivil\" value=\"casado\">Casado</input>
<input type=\"radio\" name=\"estadocivil\" value=\"otro\">Otro</input></p>
<p>

<b>Aficiones: </b>
<input type=\"checkbox\" name=\"aficiones\" value=\"cine\">Cine</input> 
<input type=\"checkbox\" name=\"aficiones\" value=\"literatura\">Literatura</input>
<input type=\"checkbox\" name=\"aficiones\" value=\"tebeos\">Tebeos</input>
<input type=\"checkbox\" name=\"aficiones\" value=\"deporte\">Deporte</input> 
<input type=\"checkbox\" name=\"aficiones\" value=\"musica\">Musica</input>
<input type=\"checkbox\" name=\"aficiones\" value=\"television\">Television</input></p>

    <button type=\"submit\">Enviar</button>
    <button type=\"reset\">Borrar</button>
    </fieldset>
    </p>
    <form>
    "
    ?>

</body>
</html>