<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FES LA TEVA PIZZA</title>
</head>
<body>
    <?php
    $preu = 8;
    $IVA = 21;

    if (empty($_GET['ingr'])) {
        $pvp = (($preu * (100 + $IVA)) / 100);
        echo "Has demanat només la pizza bàsica. El preu és $pvp € (IVA inclòs)<br>";
        #exit(0);
    } else {
        $pvp = (($preu + count($_GET['ingr'])) * (100 + $IVA)) / 100;
        echo "Has demanat la pizza bàsica amb:<br>";
        foreach ($_GET['ingr'] as $ingredient) {
            if ($ingredient) {
                echo "* $ingredient<br>";
            }
        }
        echo "El preu és $pvp € (IVA inclòs)<br>";
        #exit(0);
    }

    echo "<br>";
    echo "Autor: dacomo<br>";
    ?>
<a href="pizza.html">Retorna al formulari de selecció d’ingredients</a>
</body>
</html>
