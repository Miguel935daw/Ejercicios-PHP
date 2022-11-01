<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle do-while . -->
<body>
<?php
        echo "Múltiplos de 5, desde el 0 al 100: ";
        $numero = 0;
        do{
            if($numero%5 == 0){
                echo "$numero ,";
            }
            $numero++;
        }while ($numero <= 100);
            
        
    ?>
</body>
</html>