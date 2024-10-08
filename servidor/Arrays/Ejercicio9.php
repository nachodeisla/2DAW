<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Estadios["estadio1"]["nombre"] = "Camp Nou";
    $Estadios["estadio2"]["nombre"] = "Santiago Bernabeu";
    $Estadios["estadio3"]["nombre"] = "Mestalla";
    $Estadios["estadio4"]["nombre"] = "Anoeta";

    $Estadios["estadio1"]["equipo"] = "Barcelona";
    $Estadios["estadio2"]["equipo"] = "Real Madrid";
    $Estadios["estadio3"]["equipo"] = "Valencia";
    $Estadios["estadio4"]["equipo"] = "Real Sociedad";

    print "<ol>";
    foreach ($Estadios as $key => $value) {
        print "<li>El Equipo: ".$value["equipo"]." tiene el estadio: ".$value["nombre"]."</li>";
    }
    print "</ol>"
    ?>
</body>
</html>