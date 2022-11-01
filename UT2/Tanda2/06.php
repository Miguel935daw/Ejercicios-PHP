<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>
<!-- Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. 
Aplica 
siendo g = 9.81m/s2 -->
<body>
    <h1>Calcula el tiempo que tardaría en caer un objeto</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Altura de la caída: <input type="number" name="altura" />
               <input type="submit" value="Calcular" name="enviar"/>
          </form>
    <?php
        function tiempoCaida($altura,$gravedad){
            return sqrt((2*$altura)/$gravedad);
        }
        if($_POST){
            $altura = $_POST["altura"];
            $tiempo = round(tiempoCaida($altura,9.81),2);

            echo "<h2>Un objeto desde una altura de $altura metros tardaría en tocar el suelo $tiempo segundos";
        }
    ?>
</body>
</html>