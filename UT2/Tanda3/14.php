<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<!-- Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia. -->
<body>
    <h1>En este programa vamos a calcular una potencia con la base y exponente que introduzcas</h1>
    <form name="input" action="14.php" method="post">   
            Introduce una base: <input type="number" name="base" required><br>
            Introduce un exponente: <input type="number" name="exponente" min="0" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            $base = $_POST["base"];
            $exponente = $_POST["exponente"];
            $potencia = pow($base,$exponente);
            echo "La potencia resultante es $potencia";
        }
    ?>
    <a href="14.php">>> Volver</a>
</body>
</html>