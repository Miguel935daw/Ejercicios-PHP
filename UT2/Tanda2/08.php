<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
</head>
<!-- Amplía el programa anterior para que diga 
la nota del boletín (insuficiente, suficiente, 
bien, notable o sobresaliente). -->
<body>
    <h1>Calcula la media de tres notas</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Nota 1: <input type="number" name="nota1" /><br>
               Nota 2: <input type="number" name="nota2" /><br>
               Nota 3: <input type="number" name="nota3" />
               <input type="submit" value="Calcular" name="enviar"/>
          </form>
    <?php
        if($_POST){
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            $media = round(($nota1+$nota2+$nota3)/3,2);
            if(($nota1 < 0 or $nota1 >10) or ($nota2 < 0 or $nota2 >10) or ($nota3 < 0 or $nota3 >10)){
                echo "<h2>Has introducido datos inválidos</h2>";
            }
            elseif($media <5 and $media >=0){
                echo "<h2>La media de las tres notas introducidas es $media</h2>"; 
                echo "<h2>Calificación: Insuficiente";
            }
            elseif($media >=5 and $media<6){
                echo "<h2>La media de las tres notas introducidas es $media</h2>";
                echo "<h2>Calificación: Suficiente";
            }
            elseif($media >= 6 and $media<7){
                echo "<h2>La media de las tres notas introducidas es $media</h2>";
                echo "<h2>Calificación: Bien";
            }
            elseif($media >=7 and $media <9){
                echo "<h2>La media de las tres notas introducidas es $media</h2>";
                echo "<h2>Calificación: Notable";
            }
            elseif($media >=9 and $media<=10){
                echo "<h2>La media de las tres notas introducidas es $media</h2>";
                echo "<h2>Calificación: Sobresaliente";
            }
        }
    ?>
</body>
</html>