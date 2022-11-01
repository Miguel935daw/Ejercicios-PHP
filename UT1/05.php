<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<!-- Escribe un programa que utilice las variables $x y $y. 
Asignales los valores 144 y 999 respectivamente. A continuación, 
muestra por pantalla el valor de cada variable, la suma, la resta, 
la división y la multiplicación. -->
<body>
    <?php
        $x = 144;
        $y = 199;
        $suma = ($x + $y);
        $resta = ($x - $y);
        $division = ($x / $y);
        $multiplicacion = ($x * $y);
        echo "<h1>Valor X: $x</h1>
        <h1>Valor Y: $y</h1>
        <h1>Suma: $suma</h1>
        <h1>Resta: $resta</h1>
        <h1>División: $division</h1>
        <h1>Multiplicación: $multiplicacion</h1>";
    ?>
    
</body>
</html>