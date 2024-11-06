 <?php
if (isset($_POST["enviar"])) {


    $nombreValido = '/^([A-Z][a-z]{2,11}\s?)+$/';
    $apellidosValidos = '/^([A-Z][a-z]{2,11}\s?)+$/';
    $direccionValida = "/^(Calle|Plaza|Avenida)\s([A-Z][a-z][[:digit:]])\s?+$/";



    function comprobar($informacion)
    {
        $textoFinal = isset($_POST[$informacion])
            ? htmlspecialchars(trim(strip_tags($_POST[$informacion])), ENT_QUOTES, "UTF-8")
            : "";
        return $textoFinal;
    }
    $comprobarNombre = comprobar("nombre");
    $comprobarApellidos = comprobar("apellidos");
    $comprobarDireccion = comprobar("direccion");
    $innerHTML = "<table>";
    if (preg_match($nombreValido, $comprobarNombre)) {
        $innerHTML = $innerHTML . "<tr><td>El nombre es $comprobarNombre<td></tr>";
    } else {
        $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">El nombre $comprobarNombre no es válido<span></td></tr>";


    }
    if (preg_match($apellidosValidos, $comprobarApellidos)) {
        $innerHTML = $innerHTML . "<tr><td>Los apellidos son $comprobarApellidos<td></tr>";
    } else {
        $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">Los apellidos $comprobarApellidos no son válidos<span></td></tr>";


    }

    if (preg_match($direccionValida, $comprobarDireccion)) {
        $innerHTML = $innerHTML . "<tr><td>La direccion es $comprobarDireccion<td></tr>";
    } else {
        $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">La dirección $comprobarDireccion no es válida<span></td></tr>";


    }


    if (isset($_FILES["ficheros"])) {
        $direct = "./imagenes/";
        $nombre = $_FILES["ficheros"]["name"];
        $temporales = $_FILES["ficheros"]["tmp_name"];
        $tipos=$_FILES["ficheros"]["type"];
        $errores = $_FILES["ficheros"]["error"];
    
            for ($i=0; $i < count($temporales) ; $i++) { 
                if (is_uploaded_file($temporales[$i])) {
                    
                    if (move_uploaded_file($temporales[$i], $direct.time().$nombre[$i])) {
                    $innerHTML = $innerHTML . "<tr><td>el archivo $i se ha subido correctamente<td></tr>";
                    }else{
                        $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">fallo en la subida del archivo $i<span></td></tr>";

                        switch ($errores[$i]) {
                            case 1:
                                $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">El archivo $i supera el tamaño maximo</span></tr></td>";
                                break;
                            
                            case 2:
                                $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">El archivo $i supera el tamaño maximo</span></tr></td>";
                                break;
                            
                            case 3:
                                $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">el archivo $i se subio parcialmente</span></tr></td>";
                                break; 
                        
                            case 4:
                                $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">no se ha subido el archivo $i</span></tr></td>";
                                break;
                            case 6:
                                $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">Falta la carpeta temporal</span></tr></td>";
                                break;
                            case 7:
                                $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">no se puede escribir en el directorio especificado</span></tr></td>";
                                break;
                            case 8:
                                $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">una extension php ha detenido la subida</span></tr></td>";
                                break;
                    
                            default:
                                
                                break;}
                        }}else{
                            $innerHTML = $innerHTML . "<tr><td><span style=\"color: red\">no se encotro el archivo </span></tr></td>";

                        }}

                    }
                    
                   

    $innerHTML = $innerHTML . "<table>";

    print $innerHTML;

    print "<p><a href=\"./ejercicio1\">Volver al formulario</a></p>";


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
} else {
    ?>
        <h1>Formulario subida de archivos Múltiple</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post" enctype="multipart/form-data">

            <p>Nombre: <input type="text" name="nombre">
                Apellidos: <input type="text" name="apellidos">
            </p>
            <p>Direccion: <input type="text" name="direccion"></p>
            <h2>Elige al menos dos fotos</h2>

            <input type="hidden" name="tamanno" value="20000" />
            <input type="file" name="ficheros[]" multiple="multiple" value="">

 
            <input type="submit" name="enviar" value="enviar archivos">
        </form>

        <?php
}
?>
</body>

</html>