<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php
        $n = $_POST['n'];

        if($n <= 0)
        {
            $resultado = $n;
        }
        elseif($n < 10)
        {
            $resultado = $n;
        }
        elseif($n <= 999)
        {
            $resultado = $n / 100;
        }
        elseif($n <= 9999)
        {
            $resultado = $n / 1000;
        }
        elseif($n <= 99999)
        {
            $resultado = $n / 10000;
        }

        echo "La primera cifra de " . $n . " es " . floor($resultado) ;
    ?>
</body>
</html>