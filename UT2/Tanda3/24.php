<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>
<!-- Escribe un programa que lea un número N e imprima una pirámide de números 
con N filas como en la siguiente figura. Recuerda utilizar un tipo de letra de 
ancho fijo como por ejemplo Courier para que los espacios tengan la misma anchura 
que los números. -->
<body>
    <style>
        body{
            font-family: Courier;
        }
    </style>
    <h2>En este programa vamos a hacer una pirámide de números con la cantidad de plantas que introduzcas</h2> 
    <form name="input" action="24.php" method="post">   
            Introduce un número: <input type="number" name="n" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["n"])){
            $numero = $_POST["n"];
            $contador = 1;
            $espacios = $numero;
            $regresion = "";
            while ($contador <= $numero){
                echo str_repeat("&nbsp",$espacios);
                $espacios-=1;
                for($i=1;$i<=$contador;$i++){
                    echo $i;
                    if($i<$contador){
                        $regresion = $regresion.strval($i);
                    };
                }
                echo strrev($regresion);
                echo "<br>";
                $regresion = "";
                $contador+=1;
            }

        }
    ?>
    <a href="24.php">>> Volver</a>
</body>
</html>