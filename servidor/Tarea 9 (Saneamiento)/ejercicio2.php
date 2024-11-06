<?php 

if (isset($_POST["enviar"])) {
 $nombreValido= '/^([[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]])*[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';
 $contrasennaValida = '/^[[:alnum:]]{5, }$/';
 $emailValido = '/^.+(@gmail.com|@hotmail.com)$/';
 $webValido = '/^(www\.)(.+)(\.com|\.es)$/';

 function sanear($info){
    $textoFinal = isset($_POST[$info])
    ? htmlspecialchars(trim(strip_tags($_POST[$info])),ENT_QUOTES,"UTF-8")
    : ""; 
  
    return $textoFinal;

  }
  $comprobarNombre= sanear("nombre");
  $comprobarContrasenna= sanear("contrasena");
  $comprobarEmail = sanear("email");
  $comprobarWeb = sanear("web");

  if (preg_match($nombreValido,$comprobarNombre)) {
    $falloNombre= "El nombre es valido";
  }
  else{

    $falloNombre= "El nombre no es valido";

  }

  if (preg_match($contrasennaValida,$comprobarContrasenna)) {
    $falloContrasena= "La contraseña es válida";
  }
  else{

    $falloContrasena= "La contraseña no es válida";

  }

  if (preg_match($emailValido,$comprobarEmail)) {
    $falloEmail= "El email es válido";
  }
  else{

    $falloEmail= "El email no es válido";

  }


  if (preg_match($webValido,$comprobarWeb)) {
    $falloWeb= "la web es válida";
  }
  else{

    $falloWeb= "la web no es válida";

  }

}else{
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   
    
    <p>Escriba los datos siguientes</p>
    <form action="./Ejercicio2.php" method="post">

        <table>
            <tr>
    <td>Nombre: </td>
    <td><input type="text" name="nombre"></td>
    <td>
<?php 
if (isset($falloNombre)) {
    print("$falloNombre");
}
?>
    </td>
            </tr>
            <tr>
                <td>Contraseña: </td>
                <td><input type="password" name="contrasena"></td>
                <td>
<?php 
if (isset($falloContrasena)) {
    print("$falloContrasena");
}

?>

    </td>
            </tr>
            <tr>
                <td>Educación</td>
                <td>
                     <select name="estudios">
                            <option value="sinestudios">Sin estudios</option>
                            <option value="eso">ESO</option>
                            <option value="bachillerato">Bachillerato</option>
                            <option value="fp">F.P.</option>
                            <option value="universitarios">Universitarios</option>
                            <option value="otros">Otros</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Nacionalidad</td>
                <td><input type="radio" name="nacionalidad" value ="hispana">Hispana
                <input type="radio" name="nacionalidad" value ="sajona">Sajona
                <input type="radio" name="nacionalidad" value ="otras">Otras</td>
            </tr>
            <tr>
                <td>Idiomas</td>
                <td><input type="checkbox" name="ingles">Inglés
                <input type="checkbox" name="castellano">Castellano
                <input type="checkbox" name="frances">Francés
                <input type="checkbox" name="aleman">Alemán</td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="e-mail" name="email"></td>
                <td>
                    <?php 
                        if (isset($falloEmail)) {
                            print("$falloEmail");
                        }
                    ?>

    </td>
            </tr>
             <tr>
                <td>Sitio web</td>
                <td><input type="e-mail" name="web"></td>
                <td>
                <?php 
                        if (isset($falloWeb)) {
                            print("$falloWeb");
                        }
                    ?>
                    </td>
            </tr>
         
                
           
        </table>
        <input type="submit" name="enviar">

    </form>
</body>
</html>