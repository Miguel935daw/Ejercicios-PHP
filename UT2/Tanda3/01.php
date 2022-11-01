<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for . -->
<body>
    <?php
        echo "Múltiplos de 5, desde el 0 al 100: ";
        for ($numero = 0; $numero <= 100; $numero++){
            if($numero%5 == 0){
                echo "$numero ,";
            }
        }
    ?>
</body>
</html>