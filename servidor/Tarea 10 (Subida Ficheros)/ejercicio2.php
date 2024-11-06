<?php
if (isset(($_POST["enviar"]))) {
$tituloValido= '/^([A-Z][a-z]{2,11}\s?)+$/';
$textoValido= '/[[:alpha:]]+$/';


function comprobar($informacion){
    $textoFinal = isset($_POST[$informacion])
    ? htmlspecialchars(trim(strip_tags($_POST[$informacion])), ENT_QUOTES,"UTF-8")
    : "";
return $textoFinal;
}

$comprobarTitulo = comprobar("titulo");
$comprobarTexto = comprobar("texto");


$indexHTML = "<table>";
$indexHTML = $indexHTML."<tr><td><h2>Resultado de la insercion de la nueva noticia: </h2></td></tr>";
$indexHTML = $indexHTML."<tr><td>La noticia ha sido recibida correctamente: </td></tr>";
    if (preg_match($tituloValido, $comprobarTitulo)) {
        $indexHTML =$indexHTML."<tr><td>El titulo es: ($comprobarTitulo)</td></tr>";
        }else{
            $indexHTML = $indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarTitulo' no sigue el patron requerido</span></td></tr>";
        }
    if (preg_match($textoValido, $comprobarTexto)) {
        $indexHTML =$indexHTML."<tr><td>El texto es: ($comprobarTexto)</td></tr>";
        }else{
            $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">El control '$comprobarTexto' no sigue el patron requerido</span></td></tr>";
        }
      

        if ( $_POST["opciones"] == "...") {
           $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">No has seleccionado nada</span></td></tr>";
           }
            else if ($_POST["opciones"]=="costas") {
                 $indexHTML =$indexHTML."<tr><td>Has seleccionado la categoria: Costas</td></tr>";
            }

            

print_r($_FILES);
if (is_uploaded_file($_FILES["fichero"]["tmp_name"])) {
    $direct="./imagenes/";
    $nombre=$_FILES["fichero"]["name"];
    $nombreFinal=$direct.time().$nombre;
    move_uploaded_file($_FILES["fichero"]["tmp_name"], $nombreFinal);
    
    $indexHTML =$indexHTML."<tr><td>Imagen: <a href=$nombreFinal>$nombre</a></td></tr>";

}else {
     $indexHTML =$indexHTML."<tr><td><span style=\"color: red\">No has seleccionado ningun archivo</span></td></tr>";
}

$indexHTML = $indexHTML."</table>";
        print $indexHTML;


print "<p><a href=\"./ejercicio2\">Insertar otra noticia</a></p>";
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
    
    <p> Titulo: <input type="text" name="titulo"></p>
    <p> Texto: <textarea  name="texto"></textarea></p>
    <p> Categoria: 
        <select name="opciones" id="opciones">
            <option value="...">...</option>  
            <option value="costas">costas</option>
        </select>
    </p>
   <p>Imagen: 
    <input type="hidden" name="tamanno" value="20000" />
    <input type="file" name="fichero"></p>
    <input type="submit" name="enviar" value="Insertar noticia">


   </form>
</body>
</html>
<?php

    }
    ?>