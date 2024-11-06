<?php

if(isset($_POST["enviar"])) {
    
    function limpiarTetxo($texto){
    
    $textoFinal = isset($_POST[$texto])
    ? htmlspecialchars(trim(strip_tags($_POST[$texto])), ENT_QUOTES ,"UTF-8")
    : "";
    return $textoFinal;
    
    }
    
    
    $textoNombre = limpiarTetxo("nombre");
    $textoApellidos = limpiarTetxo("apellidos");
    $textoTelefono = limpiarTetxo("telefono");
    $textoEdad = limpiarTetxo("edad");
    
    $nombreValido = "/^([[:alpha:]][[:space:]]?[[:alpha:]]){3,12}$/i";
    $apellidosValido = "/^[[:alpha:]][[:space:]]?[[:alpha:]]{3,18}$/i";
    $telefonoValido = "/^(6|9)[[:digit:]]{8}$/";
    $edadValido = "/^[[:digit:]]+$/";

    $indexHTML = "<table>";
    
    
if (preg_match($nombreValido, $textoNombre)) {
    $indexHTML =$indexHTML."<tr><td>el nombre es valido ($textoNombre)</td></tr>";
    }else{
        $indexHTML =$indexHTML."<tr><td>el control 'Nombre' no sigue el patron requerido</td></tr>";
    }
    if (preg_match($apellidosValido, $textoApellidos)) {
        $indexHTML =$indexHTML."<tr><td>el apellido es valido ($textoApellidos)</td></tr>";
    }else{
       $indexHTML =$indexHTML."<tr><td>el control 'Apellidos' no sigue el patron requerido</td></tr>";
    }
    if (preg_match($edadValido, $textoEdad)) {
       $indexHTML =$indexHTML."<tr><td>la edad es valido ($textoEdad)</td></tr>";
    }else{
       $indexHTML =$indexHTML."<tr><td>el control 'Edad' no sigue el patron requerido</td></tr>";
    }
    if (preg_match($telefonoValido, $textoTelefono)) {
        $indexHTML =$indexHTML."<tr><td>el telefono es valido ($textoTelefono)</td></tr>";
    }else{
        $indexHTML =$indexHTML."<tr><td>el control 'Telefono' no sigue el patron requerido</td></tr>";
    }
    $indexHTML =$indexHTML."</table>";
    print $indexHTML;
   
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
}else{
?>



<form action="./examen1.php" method="POST">
<table>
<tr>
    <td>Nombre :</td>
    <td>Apellidos :</td>
</tr>
<tr>
    <td><input type="text" name ="nombre"></td>
    
    <td><input type="text" name ="apellidos"></td>
    
</tr>
<tr>
    <td>Edad :</td>
    <td>Telefono :</td>
</tr>
<tr>
    <td><input type="text" name ="edad"></td>
    
    <td><input type="text" name ="telefono"></td>
   
</tr>
<tr>
    <td><input type="file" name="archivo"></td>
    <td><input type="submit" name ="enviar"></td>
</tr>
</table>
</form>


<?php
}
?>

</body>
</html>