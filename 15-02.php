<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <?php
        $puntosTotales = $_POST['r1'] + $_POST['r2'] + $_POST['r3'] + $_POST['r4'] + $_POST['r5'] + $_POST['r6'] + $_POST['r7'] + $_POST['r8'] + $_POST['r9'] + $_POST['r10'];

        switch($puntosTotales)
        {
            case($puntosTotales <= 10):
                echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
            break;
            
            case ($puntosTotales > 10 && $puntosTotales <= 21):
                echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
            break;

            case ($puntosTotales > 21):
                echo "Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
            break;

            default:
            echo "Errorsito";
        }
    ?>
</body>
</html>