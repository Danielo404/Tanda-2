<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        $h = $_POST['h'];

        echo "El tiempo que va a tardar en caer el objeto es: " . round(sqrt(($h * 2) / 9.81), 2)  . " segundos."
    ?>
</body>
</html>