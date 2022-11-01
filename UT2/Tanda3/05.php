<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while . -->
<body>
    <?php
    $numero = 320;
    while ($numero >= 160){
        echo "$numero ,";
        $numero-=20; 
    }
    ?>
</body>
</html>