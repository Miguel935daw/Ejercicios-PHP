<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>
<!-- Realiza un programa que pida un número por teclado y que luego muestre ese número al revés. -->
<body>
    <h2>En este programa vamos a revertir el número que introduzcas</h2> 
    <form name="input" action="25.php" method="post">   
            Introduce un número: <input type="number" name="n" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($_POST["n"]))
        echo strrev($_POST["n"]);
    ?>
    <a href="25.php">>> Volver</a>
</body>
</html>