<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
    <!-- Igual que el programa anterior, 
    pero esta vez la pirámide debe aparecer invertida, 
    con el vértice hacia abajo. -->
</head>
<body>
<?php
        $base = 33;
        $asteriscos = 1;
        for($i = $base; $i != -3; $i-=4){
            echo str_repeat("*",$asteriscos).str_repeat("&nbsp",$base).str_repeat("*",$asteriscos)."<br>";
            $asteriscos+=1;
            $base-=4;
        };
    ?>
</body>
</html>