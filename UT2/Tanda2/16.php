<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<!-- Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado. -->
<body>
    <form name="input" action="16.php" method="post">
            Introduce un número: <input type="number" name="n1" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            $numero = $_POST["n1"];
            $ultimoDigito = substr($numero,-1);
            echo "El último dígito del número introducido es $ultimoDigito";
        }
    ?>
</body>
</html>