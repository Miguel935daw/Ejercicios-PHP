<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>
<!-- Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos. -->
<body>
    <?php
        function esPrimo($numero){
            for($i=2;$i<$numero;$i++){
                if($numero%$i==0){
                    return False;
                }
            }
            return True;
        }

        for($i=2;$i<=100;$i++){
            if(esPrimo($i)){
                echo "$i, ";
            }
        }
    ?>
    
</body>
</html>