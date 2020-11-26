<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($a == 0)
        {
            echo "La ecuación no tiene solución real.";
        }
        else {
            echo "X = " . (-$b / -$a);
        }
    ?>
</body>
</html>