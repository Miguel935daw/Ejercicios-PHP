<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<!-- Realiza un conversor de Mb a Kb. -->
<body>
    <form action="10.php" method="post">
        <h1>Introduce la cantidad de Mb que quieres pasar a Kb</h1>
        Megabits: <input type="text" name="megabits" id="megabits" />
        <input id="envio" type="submit" value="Convertir" />
        
    </form>
    <?php
        if($_POST){
            $megabits = $_POST["megabits"];
            $kilobits = $megabits*1000;
            echo "Kilobits: <input type='text' name='kilobits' id='kilobits' value='$kilobits'/>";
        };
    ?>
</body>
</html>