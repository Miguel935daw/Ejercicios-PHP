<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<!-- Escribe un programa que pinte por pantalla una pirámide 
    rellena a base de asteriscos. La base de la pirámide debe 
    estar formada por 9 asteriscos. -->
<body>
    <?php
        $base = 9;
        $asteriscos = 1;
        for($i = $base; $i != 0; $i--){
            echo str_repeat("&nbsp",$i).str_repeat("*",$asteriscos)."<br>";
            $asteriscos+=1;
        };
    ?>
</body>
</html>