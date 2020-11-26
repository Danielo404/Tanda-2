<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <?php
        $n = $_POST['n'];

        if($n == strrev($n))
        {
            echo "Su número es capicua";
        }
        else
        {
            echo "Su número no es capicua";
        }
    ?>
</body>
</html>