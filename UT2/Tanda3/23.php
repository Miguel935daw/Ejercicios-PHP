<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>
<!-- Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la suma de ellos 
supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado, 
el contador de los números introducidos y la media. -->
<body>
<?php
        if(!isset($_POST["n"])){
            $numero = 0;
            $total = 0;
            $contador = 0;
        }else{
            $numero = $_POST["n"];
            $total = $_POST["total"];
            $contador = $_POST["contador"];
            $media = 0;
        }
        if($total<=10000){
                    $contador +=1;    
                    $total +=$numero 
                    ?>
                    <form name="input" action="23.php" method="post">   
                    Introduce un número: <input type="number" name="n" required><br>
                    <input type="hidden" name="total" value=<?php echo $total?>>
                    <input type="hidden" name="contador" value=<?php echo $contador?>>
                    <input type="submit" value="Enviar">
                </form>
                <?php
                    }else{
                    $media = $total/$contador;
                    echo "La suma total de los número introducidos es: $total, la media de los números introducidos es: $media, la cantidad de números introducidos es: $contador\n";
                }?>
               
                <a href="23.php">>> Volver</a>
</body>
</html>