<html>
<head>
<meta charset ='utf8'>

<style>


</style>
</head>
<body>
<?php 
$num1=rand(50,150);
$num2=rand(50,150);
$num3=rand(50,150);
$inicio2=(($num1)*2)+$num2;
$inicio3 = (($num1)*2)+(($num2)*2)+$num3;
$fichas = " <svg width =900 height = 300>
<circle cx=$num1 cy=150 r=$num1 stroke=black stroke-width=2 fill = red></circle>
<circle cx=$inicio2 cy=150 r=$num2 stroke=black stroke-width=2 fill = green></circle>
<circle cx=$inicio3 cy=150 r=$num3 stroke=black stroke-width=2 fill = blue></circle>";
            
print "$fichas";

?>

</body>
</html>