<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        if($_POST['h'] >= 6 && $_POST['h'] <=12)
        {
            echo "¡Buenos días señorita!";
        }
        elseif($_POST['h'] >=13 && $_POST['h'] <= 20)
        {
            echo "¡Buenas tardes señorita!";
        }
        elseif(($_POST['h'] <=24 && $_POST['h'] >=21) || ($_POST['h'] <=5 && $_POST['h'] >=0))
        {
            echo "¡Buenas noches caballero!";
        }
        else 
        {
            echo "La hora que has introducido no es correcta so mamarracho";
        }
    ?>
</body>
</html>