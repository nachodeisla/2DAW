<html>
<head>
<meta charset ='utf8'>
</head>
<body>
<?php 

$random1 = rand(1,6);
$random2 = rand(1,6);
$final = $random1+$random2;

print "<img src=\"../img/$random1.svg\">";
print "<img src=\"../img/$random2.svg\">";

print "<div>la suma de ambos es <h1><div style=\"text-align:center; border-width=2; border-style:solid; width: 50px; height : 50px;  \"> $final</div></div></h1>";
?>
</body>
</html>