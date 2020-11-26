<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    switch($_POST['dia']){
        case "lunes":
            echo "A primera hora hay Desarrollo en entorno cliente";
        break;
        case "martes":
            echo "A primera hora hay Empresa e iniciativa emprendedora";
        break;
        case "miercoles":
            echo "A primera hora hay Desarrollo en entorno servidor";
        break;
        case "jueves":
            echo "A primera hora hay Despliege de aplicaciones web";
        break;
        case "viernes":
            echo "A primera hora hay Diseño de interfaces";
        break;
        case "sabado":
            echo "Ese día no hay telecole";
        break;
        case "domingo":
            echo "Ese día no hay telecole";
        break;
        default:
            echo "El día introducido no es correcto"; 
    }
    ?>
</body>
</html>