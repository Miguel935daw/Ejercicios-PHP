<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
<!-- Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo 
y nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares . 
El número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye en el cómputo. -->
<body>
    <?php
        if(!isset($_POST["n"])){
            $numero = 0;
            $pares = 0;
            $contador = 0;
            $impares = 0;
            $total = 0;
            $totalImpares = 0;
        }else{
            $numero = $_POST["n"];
            $pares = $_POST["pares"];
            $impares = $_POST["impares"];
            $contador = $_POST["contador"];
            $total = $_POST["total"]+$numero;
            $totalImpares = $_POST["totalImpares"];
            $mediaImpares = 0;
        }
        if($numero>=0){
                    $contador +=1;    
                    if(!($numero%2==0)){
                        $impares +=1;
                        $totalImpares += $numero;
                    }else{
                        if($pares < $numero){
                            $pares = $numero;
                        }  
                    }?>
                    <form name="input" action="21.php" method="post">   
                    Introduce un número: <input type="number" name="n" required><br>
                    <input type="hidden" name="pares" value=<?php echo $pares?>>
                    <input type="hidden" name="totalImpares" value=<?php echo $totalImpares?>>
                    <input type="hidden" name="total" value=<?php echo $total?>>
                    <input type="hidden" name="contador" value=<?php echo $contador?>>
                    <input type="hidden" name="impares" value=<?php echo $impares?>>
                    <input type="submit" value="Enviar">
                </form>
                <?php
                    }else{
                    $mediaImpares = $totalImpares/$impares;
                    echo "Has introducido $contador números, la media de los números impares introducidos es: $mediaImpares, el mayor de los pares introducidos es: $pares \n";
                }?>
               
                <a href="21.php">>> Volver</a>
</body>
</html>