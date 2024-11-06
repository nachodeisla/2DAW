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
    <form action=\"ejercicio7-2.php\" method=\"POST\">
    <fieldset>
    
    <legend>Formulario</legend>

    <p>
    <b>Nombre: </b> <input type=\"text\" name=\"nombre\">
    <b>Apellido: </b><input type=\"text\" name=\"apellidos\">
    <b>E-mail: </b><input type=\"email\" name=\"email\">
    <b>Contraseña: </b><input type=\"password\" name=\"contrasenna\">
    </p>
      
  
<b>Sexo:</b> 
    <input type=\"radio\" name=\"sexo\" value=\"botonhombre\">Hombre</input> 
    <input type=\"radio\" name=\"sexo\" value=\"botonmujer\">Mujer</input>
    <br>
<b>Nivel de estudios: </b> 
<input type=\"radio\" name=\"nivelestudios\" value=\"certificadoEscolar\">Certificado escolar</input> 
<input type=\"radio\" name=\"nivelestudios\" value=\"ESO\">Graduado ESO</input>
<input type=\"radio\" name=\"nivelestudios\" value=\"bachillerFp\">Bachiller/FP</input>
<input type=\"radio\" name=\"nivelestudios\" value=\"diplomado\">Diplomado</input>
<input type=\"radio\" name=\"nivelestudios\" value=\"licenciadoDoctorado\">Licenciado o Doctorado</input></p>
<p>
<b>Interesado en los siguientes temas: </b>
<input type=\"checkbox\" name=\"aficiones[]\" value=\"musica\">Musica</input>
<input type=\"checkbox\" name=\"aficiones[]\" value=\"deporte\">Deporte</input> 
<input type=\"checkbox\" name=\"aficiones[]\" value=\"cine\">Cine</input> 
<input type=\"checkbox\" name=\"aficiones[]\" value=\"libros\">Libros</input>
<input type=\"checkbox\" name=\"aficiones[]\" value=\"ciencia\">Ciencia</input></p>

<p>
<b>dia de la semana que le interesa recibirlo:</b>
      <select name = \"menu\" >
        <option value=\"nada\">dia de la semana</option>
        <option value=\"lunes\">Lunes/option>
        <option value=\"martes\">Martes</option>
        <option value=\"miercoles\">Miercoles</option>
        <option value=\"jueves\">Jueves</option>
        <option value=\"viernes\">Viernes</option>
        <option value=\"sabado\">Sabado</option>
        <option value=\"domingo\">Domingo</option>
      </select>
</p>
<p>
    <b>Su opinion: </b> <input type=\"textarea\" name=\"opinion\">
</p>
    <button type=\"submit\">Enviar</button>
    <button type=\"reset\">Borrar</button>
    </fieldset>
    </p>
    <form>
    "
    ?>

</body>
</html>