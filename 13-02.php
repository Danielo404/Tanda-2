<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if($a > $b)
        {
            $aux = $a;
            $a = $b;
            $b = $aux;
        }

        if($b > $c)
        {
            $aux = $b;
            $b = $c;
            $c = $aux;
        }

        if($a > $b)
        {
            $aux = $a;
            $a = $b;
            $b = $aux;
        }

        echo "El orden final de menor a mayor sería: " . $a . ", " . $b . ", " . $c;
    ?>
</body>
</html>