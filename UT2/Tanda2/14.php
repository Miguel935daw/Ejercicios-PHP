<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<!-- Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5. -->
<body>
    <form name="input" action="14.php" method="post">
            Introduce un número: <input type="number" name="n1" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            $numero = $_POST["n1"];
            if($numero%2 == 0 and $numero%5 ==0){
                echo "El número introducido es par y divisible entre 5";
            }
            elseif($numero%2 == 0 and $numero%5 != 0){
                echo "El número introducido es par, pero no es divisible entre 5";
            }
            elseif($numero%2 != 0 and $numero%5 == 0){
                echo "El número introducido no es par, pero es divisible entre 5";
            }
            else{
                echo "El número introducido no es par, ni divisible entre 5";
            }
        }
    ?>
</body>
</html>