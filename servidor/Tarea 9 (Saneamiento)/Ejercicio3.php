<?php
if (isset($_POST["enviar"])) {
    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    }
    if (isset($_POST["buscar"])) {
        $buscar=$_POST["buscar"];
    }

    if (isset($_POST["generos"])) {
        $generos=$_POST["generos"];
    }
    

    $innerHTML = "<table>";
        if (isset($nombre)) {
            $innerHTML= $innerHTML."<tr><td>Buscamos el texto $nombre</td></tr>";
        }
        if (isset($buscar)) {
            $innerHTML= $innerHTML."<tr><td>Buscamos el texto en $buscar</td></tr>";
            }
        if (isset($generos)) {
            $innerHTML= $innerHTML."<tr><td>Buscamos en genero: $generos</td></tr>";
            }
        $innerHTML= $innerHTML."</table>";
        print "Estos son los datos introducidos: ";
        print $innerHTML;
        print "<p><a href=\"./ejercicio3\">Hacer otra busqueda.</a></p>"

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
    <p>Escriba los datos siguientes</p>
    <form action="./Ejercicio3.php" method="post">
        <table>
            <tr>
    <td>Texto a buscar: </td>
    <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Buscar en: </td>
              <td><input type="radio" name="buscar" value ="Titulo">Titulo de canción
                <input type="radio" name="buscar" value ="Album">Nombres de álbum
                <input type="radio" name="buscar" value ="Ambos">Ambos campos</td>
            </tr>
            <tr>
                <td>Género musical </td>
                <td>
                     <select name="generos">
                            <option value="Todos">Todos</option>
                            <option value="Acustica">Acústica</option>
                            <option value="BandaSonora">Banda sonora</option>
                            <option value="Blues">Blues</option>
                            <option value="Electronica">Electronica</option>
                            <option value="Folk">Folk</option>
                            <option value="Jazz">Jazz</option>
                            <option value="NewAge">New Age</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                    </select>
                </td>
            </tr>
        
           
        </table>
        <table>

        </table>
        <input type="submit" name="enviar">

    </form>
    <?php
    }
 
    ?>
</body>
</html>