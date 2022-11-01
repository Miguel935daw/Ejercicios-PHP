<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio05</title>
</head>
<!-- Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0). -->
<body>
    <h1>Despeja una ecucación de primer grado</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Valor A: <input type="number" name="valorA" /><br />
               Valor B: <input type="number" name="valorB" /><br />
               <input type="submit" value="Despejar" name="enviar"/>
          </form>
    <?php
        function ecuacionG1($a,$b){
            return (0-$b)/$a;
        }
        if($_POST){
            $a = $_POST["valorA"];
            $b = $_POST["valorB"];
            $x = ecuacionG1($a,$b);
            echo "La X vale $x";
        }
    ?>
</body>
</html>