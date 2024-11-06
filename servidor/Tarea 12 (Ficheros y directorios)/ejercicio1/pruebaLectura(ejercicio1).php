<?php
if (isset(($_POST["enviar"]))) {
    $direccionValido= '/^([A-Z][a-z]{2,11}\s?)+$/';
    $precioValido= '/^[[:digit:]]+$/';
    $tamannoValido= '/^[[:digit:]]+$/';
    $observacionValido='/^[[:alpha:]{200}]/' ;

function comprobar($informacion){
    $textoFinal = isset($_POST[$informacion])
    ? htmlspecialchars(trim(strip_tags($_POST[$informacion])), ENT_QUOTES,"UTF-8")
    : "";
return $textoFinal;
}


$comprobarDireccion = comprobar("direccion");
$comprobarPrecio = comprobar("precio");
$comprobarTamanno = comprobar("tamanno");
$comprobarObservacion = comprobar("observacion");


$indexHTML = "<table>";
$indexHTML = $indexHTML."<tr><td>Vivienda añadidam correctamente: </td></tr>";
$indexHTML = $indexHTML."<tr><td><h2>La nueva vivienda es: </h2></td></tr>";
    
    if (preg_match($direccionValido, $comprobarDireccion)) {
        $indexHTML =$indexHTML."<tr><td>la direccion es: ($comprobarDireccion)</td></tr>";
        }else{
            $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarDireccion' no sigue el patron requerido</span></td></tr>";
        }
    if (preg_match($precioValido, $comprobarPrecio)) {
        $indexHTML =$indexHTML."<tr><td>El precio es: ($comprobarPrecio)</td></tr>";
        }else{
            $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarPrecio' no sigue el patron requerido</span></td></tr>";
        }
        if (preg_match($observacionValido, $comprobarObservacion)) {
            $indexHTML =$indexHTML."<tr><td>la observacion es: ($comprobarObservacion)</td></tr>";
            }else{
            $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarObservacion' no sigue el patron requerido</span></td></tr>";
            }   
    if (preg_match($tamannoValido, $comprobarTamanno)) {
        $indexHTML =$indexHTML."<tr><td>El tamaño es: ($comprobarTamanno)</td></tr>";
        }else{
        $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarTamanno' no sigue el patron requerido</span></td></tr>";
        }

           foreach ($_POST["tipoVivienda"] as $key =>$value) {
            if ($value=="...") {
                $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">No has seleccionado un tipo de vivienda </span></tr></td>";
            }else{

                $indexHTML = $indexHTML . "<tr><td>Has seleccionado el tipo de vivienda: $value </tr></td>";
            }
        } 


           foreach ($_POST["zona"] as $key =>$value) {
            if ($value=="...") {
                $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">No has seleccionado una zona </span></tr></td>";
            }else{
                $indexHTML = $indexHTML . "<tr><td>Has seleccionado la zona: $value </tr></td>";
            }
        } 

    
           if (isset($_POST["dormitorios"])) {
            
            foreach ($_POST["dormitorios"] as $key =>$value) {
                $indexHTML = $indexHTML . "<tr><td>Has seleccionado $value </tr></td>";
            }  

        }
            
            if (isset($_POST["extra"])) {
                foreach ($_POST["extra"] as $key =>$value) {
                    $indexHTML = $indexHTML . "<tr><td>Has seleccionado el extra: $value </tr></td>";
                }  
            }
               
   
        $indexHTML = $indexHTML."<table>";


        

 // print_r($_FILES);
if (is_uploaded_file($_FILES["fichero"]["tmp_name"])) {
    $direct="./imagenes/";
    $nombre=$_FILES["fichero"]["name"];
    $nombreFinal=$direct.time().$nombre;
    move_uploaded_file($_FILES["fichero"]["tmp_name"], $nombreFinal);

    $indexHTML = $indexHTML . "<tr><td>El piso solicitado seria: </tr></td>";
    $indexHTML = $indexHTML . "<tr><td><img src=$nombreFinal></tr></td>";
}else {
    
    switch ($_FILES["fichero"]["error"]) {
        case 1:
            $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">El aarchivo supera el tamaño maximo</span></tr></td>";
            break;
        
        case 2:
            $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">El archivo supera el tamaño maximo</span></tr></td>";
            break;
        
        case 3:
            $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">el archivo se subio parcialmente</span></tr></td>";
            break; 
    
        case 4:
            $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">no se ha subido el archivo</span></tr></td>";
            break;
        case 6:
            $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">Falta la carpeta temporal</span></tr></td>";
            break;
        case 7:
            $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">no se puede escribir en el directorio especificado</span></tr></td>";
            break;
        case 8:
            $indexHTML = $indexHTML . "<tr><td><span style=\"color: red\">una extension php ha detenido la subida</span></tr></td>";
            break;

        default:
            
            break;
    }
}

$file = "./lectura(ejercicio1).txt";
$escritura = $indexHTML;
$fp = fopen($file,"w");
$bytesEscritura = fwrite($fp,$escritura);
print $bytesEscritura;

fclose($fp);

print "<p><a href=\"./ejercicio3\">Insertar otra noticia</a></p>";
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
    <p><h1>DATOS PERSONALES </h1></p>
    <p><b>Insertar nueva noticia: </b></p>
    <p> Tipo de vivienda: 
        <select name="tipoVivienda[]" id="tipoVivienda">
            <option value="...">...</option>  
            <option value="piso">piso</option>
            <option value="bajo">bajo</option>
        </select>
    </p>
    <p> Zona: 
        <select name="zona[]" id="zona">
            <option value="...">...</option>  
            <option value="centro">centro</option>
            <option value="exterior">exterior</option>
        </select>
    </p>
    <p> Direccion: <input type="text" name="direccion"></p>
    <p>Numero de dormitorios: 
        <input type="radio" name="dormitorios[]" value="1 habitacion">1
        <input type="radio" name="dormitorios[]" value="2 habitaciones">2
        <input type="radio" name="dormitorios[]" value="3 habitaciones">3
        <input type="radio" name="dormitorios[]" value="4 habitaciones">4
        <input type="radio" name="dormitorios[]" value="5 habitaciones">5
    </p>
    <p> Precio: <input type="text" name="precio">  €</p>
    <p> Tamaño: <input type="text" name="tamanno">  metros cuadrados</p>
    <p> Extras (marque los que procedan): 
        <input type="checkbox" value="piscina" name="extra[]">Piscina
        <input type="checkbox" value="jardin" name="extra[]">Jardin
        <input type="checkbox" value="garaje" name="extra[]">garaje
    </p>
    <p>Foto: 
    <input type="hidden" name="tamanno" value="20000" />
    <input type="file" name="fichero" value=""></p>

    <p> Observaciones: <textarea  name="observacion"></textarea></p>
    
    
   
    <input type="submit" name="enviar" value="Insertar vivienda">


   </form>
</body>
</html>
<?php

    }
    ?>