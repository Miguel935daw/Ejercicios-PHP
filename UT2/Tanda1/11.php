<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<!-- Realiza un conversor de Kb a Mb. -->
<body>
    <form action="11.php" method="post">
        <h1>Introduce la cantidad de Kb que quieres pasar a Mb</h1>
        Kilobits: <input type="text" name="kilobits" id="kilobits" />
        <input id="envio" type="submit" value="Convertir" />
        
    </form>
    <?php
        if($_POST){
            $kilobits = $_POST["kilobits"];
            $megabits = $kilobits/1000;
            echo "Megabits: <input type='text' name='megabits' id='megabits' value='$megabits'/>";
        };
    ?> 
</body>
</html>