<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<!-- Realiza un conversor de euros a pesetas. 
Ahora la cantidad en euros que se quiere convertir 
se deberá introducir por teclado. -->
<body>
    <form action="02.php" method="post">
        <h1>Introduce la cantidad de Euros que quieres convertir a Pesetas</h1>
        Euros: <input type="text" name="euros" id="euros" />
        <input id="envio" type="submit" value="Convertir" />
        
    </form>
    <?php
        if($_POST){
            $euros = $_POST["euros"];
            $pesetas = round($euros*166.39,2);
            echo "Pesetas: <input type='text' name='pesetas' id='pesetas' value='$pesetas'/>";
        };
    ?>
</body>
</html>