<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        $pais["pais1"]["nombre"] = "España";
        $pais["pais1"]["lengua"] = "Castellano";
        $pais["pais1"]["moneda"] = "Euro";

        $pais["pais2"]["nombre"] = "Italia";
        $pais["pais2"]["lengua"] = "Italiano";
        $pais["pais2"]["moneda"] = "Lira";

        $pais["pais3"]["nombre"] = "Francia";
        $pais["pais3"]["lengua"] = "Francés";
        $pais["pais3"]["moneda"] = "Franco";

        $pais["pais4"]["nombre"] = "Reino Unido";
        $pais["pais4"]["lengua"] = "Inglés";
        $pais["pais4"]["moneda"] = "Libra";

        $pais["pais5"]["nombre"] = "Alemania";
        $pais["pais5"]["lengua"] = "Alemán";
        $pais["pais5"]["moneda"] = "Marco";

        print "<table border=3>";
        print "<thead><th colspan=3>PAISES MONEDAS E IDIOMA OFICIAL</th>";
        print "<tr>
                    <td><b>Nombre</b></td>
                    <td><b>Lengua</b></td>
                    <td><b>Moneda</b></td>
                </tr>";
        foreach ($pais as $key => $value) {
            print "<tr>";
            print "<td>".$value["nombre"]."</td>";
            print "<td>".$value["lengua"]."</td>";
            print "<td>".$value["moneda"]."</td>";
            print "</tr>";
        }
        print "</table>"
    ?>
</body>
</html>