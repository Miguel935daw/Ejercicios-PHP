<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<!-- Realiza un conversor de pesetas a euros. 
La cantidad en pesetas que se quiere convertir se deberá introducir por teclado. -->
<body>
    <form action="03.php" method="post">
        <h1>Introduce la cantidad de Euros que quieres convertir a Pesetas</h1>
        Pesetas: <input type="text" name="pesetas" id="pesetas" />
        <input id="envio" type="submit" value="Convertir" />
        
    </form>
    <?php
        if($_POST){
            $pesetas = $_POST["pesetas"];
            $euros = round($pesetas/166.39,2);
            echo "Euros: <input type='text' name='euros' id='euros' value='$euros'/>";
        };
    ?>
</body>
</html>