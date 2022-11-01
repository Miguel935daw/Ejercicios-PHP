<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<!-- Escribe un programa que diga si un número introducido por teclado es o no primo. Un número primo es aquel que sólo es divisible entre él mismo y la unidad. -->
<body>
    <h1>En este programa vamos comprobar si el número introducido es un número primo</h1> 
    <form name="input" action="16.php" method="post">   
            Introduce un número: <input type="number" name="n" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["n"])){
            $numero = $_POST["n"];
            $esPrimo = True;
            for($i = 2; $i<$numero; $i++){
                if($numero%$i==0){
                    $esPrimo = False;
                }
            }
            if($esPrimo){
                echo "El número $numero es primo";
            }else{
                echo "El número $numero no es primo";
            }
        }
    ?>
    <a href="16.php">>> Volver</a>
</body>
</html>