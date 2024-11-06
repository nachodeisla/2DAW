<?php
    if (isset(($_POST["enviar"]))) {
    $nombreValido='/^([[:alpha:]\ñ\Ñ\ç\Ç]+[[:space:]])*[[:alpha:]\ñ\Ñ\ç\Ç]+$/i';
    $telefonoValido = '/^(6|9)[0-9]{8}$/';


    
    
    function comprobar($informacion){
            $textoFinal = isset($_POST[$informacion])
            ? htmlspecialchars(trim(strip_tags($_POST[$informacion])), ENT_QUOTES,"UTF-8")
            : "";
        return $textoFinal;
    }

    $comprobarNombre = comprobar("nombre");
    $comprobarTelefono = comprobar("telefono");
    $comprobarEmail = comprobar("email");

    if (preg_match($nombreValido,$comprobarNombre)) {
        $falloNombre = "el nombre es valido";

        }else{
            $falloNombre = "el nombre no es valido";

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
    <form action="./Ejercicio1.php" method="post">
        <table>
            <tr>
    <td>Nombre: </td>
    <td><input type="text" name="nombre"></td>
    <td>
                <?php if(isset($falloNombre)){
                        print $falloNombre;
                        }
                 ?>
                </td>
            </tr>
            <tr>
                <td>Telefono: </td>
                <td><input type="number" name="telefono"></td>
                
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="email"></td>
            </tr>
         
                
           
        </table>
        <input type="submit" name="enviar">

</form>

</body>
</html>
<?php
    
    
?>