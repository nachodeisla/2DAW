<?php

if(isset($_POST["enviar"])){

$nombre='/([[:alpha:]]*[[:space:]]?)*/';
$destino='/([[:alpha:]]*[[:space:]]?)*/';
$duracion='/[[:digit:]]*/';
$salida='/[[:alpha:]]*/';


function sanear($dato){
    $textoFinal = isset($_POST[$dato])
    ? htmlspecialchars(trim(strip_tags($_POST[$dato])), ENT_QUOTES ,"UTF-8")
    : "";
    return $textoFinal;
    
    }


$comprobarNombre = sanear("nombre");
$comprobarDestino = sanear("destino");
$comprobarDuracion = sanear("duracion");
$comprobarSalida = sanear("salida");


if (preg_match($nombre, $comprobarNombre)) {
    $nombreValido="<td>$comprobarNombre</td>";
}else{
    $nombreInvalido="<td>$comprobarNombre</td>";
}
if (preg_match($destino, $comprobarDestino)) {
    $destinoValido="<td>$comprobarDestino</td>";
}else{
    $destinoInvalido="<td>$comprobarDestino</td>";
}
if (preg_match($duracion, $comprobarDuracion)) {
    $duracionValido="<td>$comprobarDuracion</td>";
}else{
    $duracionInvalido="<td>$comprobarDuracion</td>";
}
if (preg_match($salida, $comprobarSalida)) {
    $salidaValido="<td>$comprobarSalida</td>";
}else{
    $salidaInvalido="<td>$comprobarSalida</td>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .morada{
        border: 2px solid black;
    background-color:purple;
    font-size:300%;
    }
    body{

        background-color:#f7b820;
    }
</style>
</head>
<body>
    <table>
        <tr>
            <td class="morada">nombre</td>
            <td class="morada">destino</td>
            <td class="morada">duracion</td>
            <td class="morada">salida</td>
        </tr>
        <tr>
            <?php
            if (isset($nombreValido) && isset($destinoValido) && isset($duracionValido) && isset($salidaValido)) {
                print $nombreValido;
                print $destinoValido;
                print $duracionValido;
                print $salidaValido;
            }
            ?>
        </tr>
    </table>
    
<form action="./examen2.php" method="post">
    <table>
        <tr>
            <td>introduza el nombre del circuito: </td>
            <td><input type="text" name="nombre"></td>
            <?php
            if(isset($nombreInvalido)){
            print $nombreInvalido;
            }
            ?>
        </tr>
        <tr>
            <td>introduza el nombre del destino: </td>
            <td><input type="text" name="destino"></td>
            <?php
            if (isset($destinoInvalido)) {
                print $destinoInvalido;
            }
            
            ?>
        </tr>
        <tr>
            <td>introduza la duracion: </td>
            <td><input type="text" name="duracion"></td>
            <?php
            if (isset($duracionInvalido)) {
                print $duracionInvalido;
            }
            
            ?>
        </tr>
        <tr>
            <td>introduza los dias de salida: </td>
            <td><input type="text" name="salida"></td>
            <?php

            if (isset($salidaInvalido)) {
                print $salidaInvalido;
            }
          
            ?>
        </tr>
        <tr>
            <td><input type="submit" name="enviar" value="enviar"></input></td>
            <td><a href=""></a></td>
        </tr>
    </table>
</form>

</body>
</html>
<?php
}else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .morada{
        border: 2px solid black;
    background-color:purple;
    font-size:300%;
    }
    body{

        background-color:#f7b820;
    }
</style>
</head>

<body>
    <table>
        <tr>
            <td class="morada">nombre</td>
            <td class="morada">destino</td>
            <td class="morada">duracion</td>
            <td class="morada">salida</td>
        </tr>
        <tr>
            
        </tr>
    </table>
    
<form action="./examen2.php" method="post">
    <table>
        <tr>
            <td>introduza el nombre del circuito: </td>
            <td><input type="text" name="nombre"></td>
           
        </tr>
        <tr>
            <td>introduza el nombre del destino: </td>
            <td><input type="text" name="destino"></td>
            
        </tr>
        <tr>
            <td>introduza la duracion: </td>
            <td><input type="text" name="duracion"></td>
            
        </tr>
        <tr>
            <td>introduza los dias de salida: </td>
            <td><input type="text" name="salida"></td>
            
        </tr>
        <tr>
            <td><input type="submit" name="enviar" value="enviar"></input></td>
            <td><a href=""></a></td>
        </tr>
    </table>
</form>

</body>
</html>
<?php
}
?>