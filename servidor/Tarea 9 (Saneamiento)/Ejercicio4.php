<?php
if (isset($_POST["enviar"])) {
    
    $nombreValido= '/^([A-Z][a-z]{2,11}\s?)+$/';
    $apellidoValido= '/^([A-Z][a-z]{2,11}\s?)+$/';;
    $direccionValido='/^([[:alnum:]]{2,12}\s?)+$/';;
    $fechaValido='/^([[:digit:]]{1,2})\/([[:digit:]]{1,2})\/[[:digit:]]{1,4}$/';
    $edadValido='/^[[:digit:]]+$/';
   
    $observacionValido = '/^.{0,200}$/';


    function sanear($informacion){
        $textoFinal = isset($_POST[$informacion])
        ? htmlspecialchars(trim(strip_tags($_POST[$informacion])),ENT_QUOTES,"UTF-8")
        : ""; 
        return $textoFinal;
    
      }

      $comprobarNombre= sanear("nombre");
      $comprobarApellido= sanear("apellidos");
      $comprobarDireccion= sanear("direccion");
      $comprobarFecha= sanear("fechaNacimiento");
      $comprobarEdad= sanear("edad");
      $comprobarEmail = sanear("direccionCorreo");
      $comprobarObservacion = sanear("observaciones");


      $innerHTML = "<table>";
        if (preg_match($nombreValido,$comprobarNombre)) {
            $innerHTML= $innerHTML."<tr><td>El nombre es $comprobarNombre</td></tr>";
        }else{
            $innerHTML= $innerHTML."<tr><td>El nombre '$comprobarNombre' es Invalido</td></tr>";

        }
        if (preg_match($apellidoValido,$comprobarApellido)) {
            $innerHTML= $innerHTML."<tr><td>El apellido es $comprobarApellido</td></tr>";
        }else{
            $innerHTML= $innerHTML."<tr><td>El apellido '$comprobarApellido' es Invalido</td></tr>";
    
        }
        if (preg_match($direccionValido,$comprobarDireccion)) {
            $innerHTML= $innerHTML."<tr><td>la direccion es $comprobarDireccion</td></tr>";
        }else{
            $innerHTML= $innerHTML."<tr><td>la direccion '$comprobarDireccion' es Invalido</td></tr>";
    
        }
        if (preg_match($fechaValido,$comprobarFecha)) {
            $innerHTML= $innerHTML."<tr><td>la fecha es $comprobarFecha</td></tr>";
        }else{
            $innerHTML= $innerHTML."<tr><td>la fecha '$comprobarFecha' es Invalido</td></tr>";
    
        }
        if (preg_match($edadValido,$comprobarEdad)) {
            $innerHTML= $innerHTML."<tr><td>la edad es $comprobarEdad</td></tr>";
        }else{
            $innerHTML= $innerHTML."<tr><td>la edad '$comprobarEdad' es Invalido</td></tr>";
    
        }
        if (filter_var($comprobarEmail, FILTER_VALIDATE_EMAIL)) {
            $innerHTML= $innerHTML."<tr><td>El email es $comprobarEmail</td></tr>";
        }else{
            $innerHTML= $innerHTML."<tr><td>El email '$comprobarEmail' es Invalido</td></tr>";
    
        }
        if (preg_match($observacionValido,$comprobarObservacion)) {
            $innerHTML= $innerHTML."<tr><td>la observacion es $comprobarObservacion</td></tr>";
        }else{
            $innerHTML= $innerHTML."<tr><td>la observacion '$comprobarObservacion' es Invalido</td></tr>";
    
        }
        
        
        $innerHTML= $innerHTML."</table>";
        print "Estos son los datos introducidos: ";
        print $innerHTML;
        print "<p><a href=\"./ejercicio4\">Volver al formulario.</a></p>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
}else{
    ?>
    <fieldset>
    <legend>Datos personales</legend>
    <form action="./Ejercicio4.php" method="post">
        <table>
            <tr>
    <td>Nombre: <input type="text" name="nombre"></td>
    <td>Apellido: <input type="text" name="apellidos"></td>
            </tr>
            <tr>
    <td>Direccion: <input type="text" name="direccion"></td>
            </tr>
            <tr>
    <td>Fecha nacimiento: <input type="text" name="fechaNacimiento"></td>
            </tr>
            <tr>
    <td>Edad: <input type="text" name="edad"></td>
            </tr>
            <tr>
                <td>Idiomas
                <input type="checkbox" name="castellano">Castellano
                <input type="checkbox" name="rumano">Rumano
                <input type="checkbox" name="ingles">Inglés
                <input type="checkbox" name="frances">Frances</td>
            </tr>
            <tr>
                <td>Genero:
                <input type="radio" name="genero" value ="masculino">Masculino
                <input type="radio" name="genero" value ="femenino">femenino
                <input type="radio" name="genero" value ="noEspecificar">Prefiero no especificar
            </td>
            </tr>
            <tr>
                <td>Estudios: 
                     <select name="generos">
                            <option value="eso">ESO</option>
                            <option value="bachiller">Bachiller</option>
                            <option value="cicloFormativo">Ciclo formativo</option>
                            <option value="gradoUniversitario">Grado universitario</option>
                    </select>
                </td>
            </tr>
            <tr>
    <td>Direccion de correo: <input type="text" name="direccionCorreo"></td>
            </tr>
            <tr>
            <td>Obsevaciones: </td>
            </tr>
            <tr>
            <td><textarea name="observaciones"></textarea></td>
            </tr>
            
           
        </table>
        <input type="submit" name="enviar">

    </form>
    </fieldset>
    <?php
    }
 
    ?>
</body>
</html>