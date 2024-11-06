<?php
if (isset(($_POST["enviar"]))) {
$nombreValido= '/^([[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]]?)*[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';
$apellidoValido= '/^([[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]]?)*[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';
$edadValido='/^[[:digit:]]+$/';
$telefonoValido = "/^(6|9)[[:digit:]]{8}$/";

function comprobar($informacion){
    $textoFinal = isset($_POST[$informacion])
    ? htmlspecialchars(trim(strip_tags($_POST[$informacion])), ENT_QUOTES,"UTF-8")
    : "";
return $textoFinal;
}

$comprobarNombre = comprobar("nombre");
$comprobarApellido = comprobar("apellido");
$comprobarEdad = comprobar("edad");
$comprobarTelefono = comprobar("telefono");
$comprobarEmail = comprobar("email");

$indexHTML = "<table>";

    if (preg_match($nombreValido, $comprobarNombre)) {
        $indexHTML =$indexHTML."<tr><td>El nombre introducido es: ($comprobarNombre)</td></tr>";
        }else{
            $indexHTML = $indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarNombre' no sigue el patron requerido</span></td></tr>";
        }
    if (preg_match($apellidoValido, $comprobarApellido)) {
        $indexHTML =$indexHTML."<tr><td>El apellido introducido es: ($comprobarApellido)</td></tr>";
        }else{
            $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarApellido' no sigue el patron requerido</span></td></tr>";
        }
    if (preg_match($edadValido, $comprobarEdad)) {
        $indexHTML =$indexHTML."<tr><td>La edad introducida es: ($comprobarEdad)</td></tr>";
        }else{
            $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarEdad' no sigue el patron requerido</span></td></tr>";
        }   
    if (preg_match($telefonoValido, $comprobarTelefono)) {
        $indexHTML =$indexHTML."<tr><td>El telefono introducido es: ($comprobarTelefono)</td></tr>";
        }else{
            $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarTelefono' no sigue el patron requerido</span></td></tr>";
        }
  if (filter_var($comprobarEmail, FILTER_VALIDATE_EMAIL)) {
        $indexHTML =$indexHTML."<tr><td>El email introducido es: ($comprobarEmail)</td></tr>";
        }else{
            $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarEmail' no sigue el patron requerido</span></td></tr>";
        }

        $indexHTML =$indexHTML."<tr><td>  </td></tr>"; 


        print $indexHTML;

print_r($_FILES);
if (is_uploaded_file($_FILES["fichero"]["tmp_name"])) {
    $direct="./imagenes/";
    $nombre=$_FILES["fichero"]["name"];
    $com=$direct.time().$nombre;
    move_uploaded_file($_FILES["fichero"]["tmp_name"], $com);
}else {
    # code...
}


print "<p><a href=\"./ejercicio1\">Volver al formulario.</a></p>";
    }else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post" enctype="multipart/form-data">
    <p><b>Los valores intoducidos son: </b></p>
    <p><h1>DATOS PERSONALES </h1></p>
    <p> Nombre: <input type="text" name="nombre"> Apellidos: <input type="text" name="apellido"></p>
   <p> Edad: <input type="text" name="edad"></p>
   <p> Telefono: <input type="text" name="telefono"></p>
   <p> Email: <input type="text" name="email"></p>
   
   <p>FOTO: 
    <input type="hidden" name="tamanno" value="20000" />
    <input type="file" name="fichero">
    <input type="submit" name="enviar"></p>


   </form>
</body>
</html>
<?php

    }
    ?>