<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
// $nada=$_POST["nada"];
// $menorDe20=$_POST["-20"];
// $entre20Y39=$_POST["20-39"];
// $entre40Y59=$_POST["40-59"];
// $masDe60=$_POST["60-"];

if ($_POST["menu"]=="nada") {
    print "no ha seleccionado una edad";
}
elseif ($_POST["menu"]=="-20") {
    print "tiene menos de 20 años";
}
elseif ($_POST["menu"]=="20-39") {
    print "tiene entre 20 y 39 años";
}
elseif ($_POST["menu"]=="40-59") {
    print "tiene entre 40 y 59 años";
}
elseif ($_POST["menu"]=="60-") {
    print "tiene mas de 60 años";
}else{
    print"error";
}

?>

</body>
</html>