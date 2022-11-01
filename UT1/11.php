<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
    <!-- Igual que el programa anterior, 
    pero esta vez la pirámide estará hueca 
    (se debe ver únicamente el contorno hecho con asteriscos). -->
</head>
<body>
    <?php
        $base = 9;
        $huecos = 1;
        for($i = $base; $i != 0; $i--){
            echo str_repeat("*",$i).str_repeat("&nbsp",$huecos).str_repeat("*",$i)."<br>";
            $huecos+=4;
        };
    ?>
</body>
</html>