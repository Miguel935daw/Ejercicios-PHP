<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
</head>
<!-- Realiza un conversor de euros a pesetas. 
La cantidad en euros que se quiere convertir 
deberá estar almacenada en una variable. -->
<body>
    <?php
        $euros = 7;
        $pesetas = round($euros*166.39,2);
        echo "Euros: $euros <br>";
        echo "Pesetas: $pesetas";
    ?>
</body>
</html>