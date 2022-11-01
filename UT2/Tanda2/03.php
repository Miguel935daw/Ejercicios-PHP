<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<!-- Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana. -->
<body>
    <form action="03.php" method="post">
        <h1>Introduce un número del 1 al 7</h1>
        Número: <input type="text" name="numero" id="numero" />
        <input id="envio" type="submit" value="Enviar" />
    </form>
    <?php
    if($_POST){
        $numero = $_POST["numero"];
        if($numero == 1){
            echo "<h2>Lunes</h2>";
        }
        elseif($numero == 2){
            echo "<h2>Martes</h2>";
        }
        elseif($numero == 3){
            echo "<h2>Miércoles</h2>";
        }
        elseif($numero == 4){
            echo "<h2>Jueves</h2>";
        }
        elseif($numero == 5){
            echo "<h2>Viernes</h2>";
        }
        elseif($numero == 6){
            echo "<h2>Sábado</h2>";
        }
        elseif($numero == 7){
            echo "<h2>Domingo</h2>";
        }
        else{
            echo "<h2>No has introducido un numero válido :( </h2>";
        }
    }
    ?>
</body>
</html>