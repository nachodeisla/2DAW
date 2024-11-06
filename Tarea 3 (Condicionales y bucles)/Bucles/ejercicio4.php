<html>
<head>
<meta charset ='utf8'>
</head>
<body>
<?php 

$random1 = rand(1,10);
$par=0;
$impar=0;
print "<h1> $random1 dados </h1><br>";
for($i = 0; $i<$random1; $i++){
    $random = rand(1,6);
    print "<img src=\"../img/$random.svg\">";
        if($random%2==0){
            $par++;
        }else{
            $impar++;
        }
}
print "<p>hay un total de $par pares y $impar impares</p>";

?>
</body>
</html>