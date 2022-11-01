<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>
<!--  Realiza un conversor de pesetas a euros. 
La cantidad en pesetas que se quiere convertir deberá estar almacenada en una variable.-->
<body>
    <?php
        $pesetas = 166.39;
        $euros = round($pesetas/166.39,2);
        echo "Pesetas: $pesetas <br>";
        echo "Euros: $euros ";
        
    ?>
</body>
</html>