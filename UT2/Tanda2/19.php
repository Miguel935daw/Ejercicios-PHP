<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<!-- Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se permiten números de hasta 5 cifras. -->
<body>
    <form name="input" action="19.php" method="post">
            Introduce un número: <input type="number" name="n1" min=0 max=99999 required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            $numero = $_POST["n1"];
            $numeroReves = strrev($numero);
            if($numero == $numeroReves){
                echo "El número introducido es capicua";
            }
            else{
                echo "El número introducido no es capicua";
            }
        }
    ?>
</body>
</html>