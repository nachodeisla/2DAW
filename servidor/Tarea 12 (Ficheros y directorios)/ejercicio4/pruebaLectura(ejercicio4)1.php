<?php
 $folder = "./prueba/";
 $directorio = opendir($folder);

while($archivo = readdir($directorio)){
    if (is_dir($folder.$archivo)) {
        print "<p>El directorio es : $archivo</p>";
    }else{
        $tamaño = filesize($folder.$archivo);
        print "<p>El fichero es : $archivo</p>";
        print "<p>El tamañop es : $tamaño</p>";

    }
}



 closedir($directorio);
//  $contenido = fread($fp, filesize($file));
//  $bytesEscritura = fwrite($fp,$contenido);
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

</style>
<body>
<?php
//  print $contenido;
//  print "<p>el numero de bytes totales es: ".filesize($file);
?>
</body>
</html>