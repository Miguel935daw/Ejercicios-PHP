<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>
<!-- Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado. -->
<body>
    <form name="input" action="09.php" method="post">
            Introduce un número: <input type="number" name="n1" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            $numero = $_POST["n1"];
            if($numero >= 0){
                $digitos = strlen($numero);
                echo "El número introducido tiene $digitos dígitos";
            }
            else{
                $digitos = strlen($numero)-1;
                echo "El número introducido tiene $digitos dígitos";
            }
        }
    ?>
</body>
</html>