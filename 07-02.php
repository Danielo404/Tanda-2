<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        echo "La media total te sale: " . round(($_POST['a'] + $_POST['b'] + $_POST['c']) / 3, 2);
    ?>
</body>
</html>