<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <?php
         $n = $_POST['n'];
         echo "La última cifra de $n es ", $n % 10;
    ?>
</body>
</html>