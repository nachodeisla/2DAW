<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$paises["pais1"]["pais"]="italia";
$paises["pais1"]["capital"]="roma";

$paises["pais2"]["pais"]="luxemburgo";
$paises["pais2"]["capital"]="luxemburgo";

$paises["pais3"]["pais"]="belgica";
$paises["pais3"]["capital"]="bruselas";

$paises["pais4"]["pais"]="dinamarca";
$paises["pais4"]["capital"]="copenhage";

$paises["pais5"]["pais"]="finlandia";
$paises["pais5"]["capital"]="helsinki";

$paises["pais6"]["pais"]="francia";
$paises["pais6"]["capital"]="paris";

$paises["pais7"]["pais"]="eslovakia";
$paises["pais7"]["capital"]="bratislava";

$paises["pais8"]["pais"]="eslovenia";
$paises["pais8"]["capital"]="ljubljana";

$paises["pais9"]["pais"]="alemania";
$paises["pais9"]["capital"]="berlin";

$paises["pais10"]["pais"]="grecia";
$paises["pais10"]["capital"]="atenas";

$paises["pais11"]["pais"]="irlanda"; 
$paises["pais11"]["capital"]="dublin";

$paises["pais12"]["pais"]="holanda";
$paises["pais12"]["capital"]="amsterdam";

$paises["pais13"]["pais"]="portugal";
$paises["pais13"]["capital"]="lisboa";

$paises["pais14"]["pais"]="españa";
$paises["pais14"]["capital"]="madrid";

$paises["pais15"]["pais"]="suecia";
$paises["pais15"]["capital"]="estocolmo";

$paises["pais16"]["pais"]="reino unido";
$paises["pais16"]["capital"]="londres";

$paises["pais17"]["pais"]="chipre";
$paises["pais17"]["capital"]="nicosia";

$paises["pais18"]["pais"]="republica checa";
$paises["pais18"]["capital"]="praga";

$paises["pais19"]["pais"]="estonia";
$paises["pais19"]["capital"]="tallin";

$paises["pais20"]["pais"]="hungria";
$paises["pais20"]["capital"]="budapest";

$paises["pais21"]["pais"]="malta";
$paises["pais21"]["capital"]="valetta";
 
$paises["pais22"]["pais"]="austria";
$paises["pais22"]["capital"]="viena";

$paises["pais23"]["pais"]="polonia";
$paises["pais23"]["capital"]="varsovia";



foreach ($paises as $key => $value){
   print "la capital de ".$value["pais"]." es ".$value["capital"]."<br>";
    }
    
    
    


?>

</body>
</html>