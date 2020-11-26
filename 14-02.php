<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <?php
    $n = $_POST['n'];

        if($n % 2)
        {
            echo "El número " . $n . " es impar.";
           
        }
        else{
            echo "El número " . $n . " es par.";
        }
        
        echo "<br>";

        if($n % 5)
        {
            echo "No es múltiplo de 5.";
        }
        else{
            echo "Es múltiplo de 5.";
        }
    ?>
</body>
</html>