<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
     switch($_POST['dia']){
        case 1:
            echo "Hoy es lunes";
        break;
        case 2:
            echo "Hoy es martes";
        break;
        case 3:
            echo "Its wednesday my dudes!";
        break;
        case 4:
            echo "Hoy es jueves";
        break;
        case 5:
            echo "Friday night - Yakuza 0 ver.";
        break;
        case 6:
            echo "Sabadito";
        break;
        case 7:
            echo "Domingo de mimir";
        break;
        default:
            echo "El día introducido no es correcto"; 
    }
    ?>
</body>
</html>