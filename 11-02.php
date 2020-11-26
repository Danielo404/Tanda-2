<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
        $h = $_POST['h'];
        $m = $_POST['m'];

        $segundosTotales = ($h * 3600 + $m * 60);

        echo "Te quedan " . (86400 - $segundosTotales) . " segundos para llegar a medianoche."
    ?>
</body>
</html>