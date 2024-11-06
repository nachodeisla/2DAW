<?php
$folder = "./img/";
$directorio = opendir($folder);

$ficheroEscritura = "./lectura(ejercicio6).txt";
$fp=fopen($ficheroEscritura,"a");
while($archivo = readdir($directorio)){
    if (!is_dir($folder.$archivo)) {

        $tamaño = filesize($folder.$archivo);
        $cadena = "El fichero es : $archivo y su tamaño es : $tamaño \n\r";
        
        
        fwrite($fp,$cadena);
        
        
    }else{}
}


    fclose($fp);
    closedir($directorio);
 

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
?>
</body>
</html>