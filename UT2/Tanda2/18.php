<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<!-- Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o negativo. Se permiten números de hasta 5 dígitos. -->
<body>
    <form name="input" action="18.php" method="post">
            Introduce un número: <input type="number" name="n1" min=-99999 max=99999 required><br>
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