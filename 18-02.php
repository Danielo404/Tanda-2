<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php
        $n = $_POST['n'];
        $contador = 1;
        if($n < 0)
        {
            $n = -$n;
            while($n > 10)
            {
                $n = $n / 10;
                $contador++;
            }
        }
        else
        {
            while($n > 10)
            {
                $n = $n / 10;
                $contador++;
            }
        }
        echo "El número tiene " . $contador . " dígitos."
    ?>
</body>
</html>