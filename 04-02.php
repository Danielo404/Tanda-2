<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        if($_POST['h'] >= 40)
        {
            $total = ($_POST['h'] - 40) * 16;
            $total = $total + 40 * 12;
            echo "Te corresponden " . $total . " € totales.";
        }
        else {
            $total = $_POST['h'] * 12;
            echo "Te corresponden " . $total . " € totales.";
        }
    ?>
</body>
</html>