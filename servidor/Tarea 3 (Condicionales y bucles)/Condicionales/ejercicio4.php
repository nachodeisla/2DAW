<html>
<head>
<meta charset ='utf8'>
<style>
    td{
        text-align: center;    }
    
</style>
</head>
<body>
<?php 

$random1 = rand(1,6);
$random2 = rand(1,6);
$random3 = rand(1,6);

print "<img src=\"../img/$random1.svg\"><img src=\"../img/$random2.svg\"><img src=\"../img/$random3.svg\"><br>";

if($random1==$random2 && $random1==$random3){

    print "tenemos tres dados iguales";
}elseif(($random1!=$random2 && $random1==$random3)||($random1==$random2 && $random1!=$random3)||($random2==$random3 && $random2!=$random1)){
print "tenemos dos dados iguales";
}else{
    if($random1>$random2 && $random1>$random3){
        print "el mayor es $random1, el dado 1";
    }elseif ($random2>$random1 && $random2>$random3){
        print "el mayor es $random2, el dado 2";
    }elseif($random3>$random1 && $random3>$random2){
        print "el mayor es $random3, el dado 3";
    }
}
?>
</body>
</html>