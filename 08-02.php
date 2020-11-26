<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $total = round(($a + $b + $c) / 3, 2);

    if($total <= 4.99 )
    {
        echo "Tu nota media es : " . $total . " Tienes un insuficiente.";
    }
    elseif ($total <= 5.99) {
        echo "Tu nota media es : " . $total . " Tienes un suficiente.";
    }
    elseif ($total <= 6.99) {
        echo "Tu nota media es : " . $total . " Tienes un bien.";
    }
    elseif ($total <= 8.99) {
        echo "Tu nota media es : " . $total . " Tienes un notable.";
    }
    else {
        echo "Tu nota media es : " . $total . " Tienes un sobresaliente.";
    }
    
    ?>
</body>
</html>